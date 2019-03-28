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
//    $users = \App\User::all()->where('id','===', Auth::id());;
        $user = Auth::user();
        dd($user->orders);
    $orders = \App\Order::all()->where('user_id','===', Auth::id());;

        foreach ($orders as $order) {
            foreach($order->products as $product){
                $order->id;
                $product->pivot->quantity;
                $product->name;
                $product->image;
            }
        }
         {
        return view('my-account')->with('users', $users)->with('orders', $orders)->with('product', $product);
        }
    //
    }


}
