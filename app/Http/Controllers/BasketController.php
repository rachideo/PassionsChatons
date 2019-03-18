<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('basket');
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
        $basketItems = [];
        $totalPrice = 0;

        foreach ($request->toAdd as $itemId) {
            $chaton = \App\Product::find($itemId);
            $basketItems[$itemId]['id'] = $itemId;
            $basketItems[$itemId]['name'] = $chaton->name;
            $basketItems[$itemId]['price'] = $chaton->price;
            $basketItems[$itemId]['image'] = $chaton->image;
            if(!isset($request->session()->get('basket')[$itemId]['quantity'])) {
                $basketItems[$itemId]['quantity'] = 1;
            } else {
                $basketItems[$itemId]['quantity'] = $request->session()->get('basket')[$itemId]['quantity'];
            }
            $totalPrice += ($basketItems[$itemId]['quantity'] * $chaton->price);
        }

        $request->session()->put('basket', $basketItems);
        $request->session()->put('totalPrice', $totalPrice);

        return view('basket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $basket = session('basket');
        $totalPrice = 0;

        foreach($basket as $itemId => $values) {
            $basket[$itemId]['quantity'] = $request->$itemId;
            $totalPrice += ($basket[$itemId]['quantity'] * $basket[$itemId]['price']);
        }

        $request->session()->put('basket', $basket);
        $request->session()->put('totalPrice', $totalPrice);

        return view('basket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
