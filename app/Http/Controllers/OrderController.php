<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(Request $request)
    {
        $userBasket = session('basket');
        $newOrder = new \App\Order;

        $newOrder->customer = $request->customer;
        $newOrder->date = date();



        dd($newOrder);

        return view('confirm-order');
    }
}
