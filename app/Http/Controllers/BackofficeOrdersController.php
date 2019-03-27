<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $sorting = $request->input('sort');
        $orders = \App\Order::all();

        foreach($orders as $order) {
            $orderTotal = 0;
            foreach($order->products as $orderLine) {
                $orderTotal += ($orderLine->pivot->quantity * $orderLine->price);
            }

            $order->orderTotal = $orderTotal;
        }

        if ($sorting == 'date') {
            $sortedOrders = $orders->sortByDesc('created_at');
            $sortedOrders->values()->all();
        } elseif ($sorting == 'price') {
            $sortedOrders = $orders->sortByDesc('orderTotal');
            $sortedOrders->values()->all();
        } else {
            $sortedOrders = $orders;
        }

        return view('backoffice.orders-list-bo')->with('orders', $sortedOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($orderId)
    {
        $order = \App\Order::where('id', $orderId)->first();
        $orderLines = [];

        $order->total = 0;

        foreach($order->products as $orderLine) {
            $orderLine->quantity = $orderLine->pivot->quantity;
            $orderLine->lineTotal = $orderLine->quantity * $orderLine->price;
            $order->total += $orderLine->lineTotal;
            array_push($orderLines, $orderLine);
        }

        $order->orderLines = $orderLines;

        return view('backoffice.order-details-bo')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $order = $request->input('id');
        \App\Order::destroy($order);

        return redirect()->route('bo_orders_list')->with('status', 'La commande a bien été supprimé');
    }
}
