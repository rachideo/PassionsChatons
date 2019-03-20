<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        if (session('basket')) {

            /* Création nouvelle commande dans la table orders */

            $newOrder = new \App\Order;
            $newOrder->user_id = 1; // Attaché à l'utilisateur 1 : à changer par l'id user
            $newOrder->save();


            /* Création des lignes de la commande dans la table product_order */

            $currentOrder = \App\Order::all()->sortByDesc('created_at')->first();

            foreach (session('basket') as $productAttributes) {
                $currentOrder->products()->attach(1, // Attaché à l'utilisateur 1 : à changer par l'id user
                    [
                        'order_id' => $currentOrder->id,
                        'product_id' => $productAttributes['id'],
                        'quantity' => $productAttributes['quantity']
                    ]
                );
            }

            session()->put('order', session('basket'));
            session()->put('orderTotal', session('totalPrice'));
            session()->forget('basket');
        }

        return view('confirm-order')->with('orderContent', session('order'));
    }
}
