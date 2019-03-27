<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {
    $users = \App\User::all()->where('id','===', Auth::id());;
    $orders = \App\Order::all()->where('user_id','===', Auth::id());;

        $product = \App\Product::find(1);

        foreach ($product->orders as $order) {
            echo $order->pivot->quantity;
        }
         {
        return view('my-account')->with('users', $users)->with('orders', $orders);
        }
    //
    }



}
