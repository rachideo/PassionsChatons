<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {
        if (session('basket')) {

            /* Création nouvelle commande dans la table orders */

            $newOrder = new \App\Order;
            $newOrder->user_id = auth()->id();
            $newOrder->address_id_billing = auth()->user()->address_id_billing;
            $newOrder->address_id_delivery = auth()->user()->address_id_delivery;
            $newOrder->save();


            /* Création des lignes de la commande dans la table product_order */

            $currentOrder = \App\Order::all()->sortByDesc('created_at')->first();

            foreach (session('basket') as $productAttributes) {
                $currentOrder->products()->attach(auth()->id(),
                    [
                        'order_id' => $currentOrder->id,
                        'product_id' => $productAttributes['id'],
                        'quantity' => $productAttributes['quantity']
                    ]
                );
            }

            session()->forget('basket');
        }
        dd(auth()->user());

        $order = auth()->user()->order->sortByDesc('created_at')->first();
        return view('confirm-order')->with('order', $order);
    }
}
