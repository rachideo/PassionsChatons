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
        $user = Auth::user();
        $orders = \App\Order::all()->where('user_id','===', Auth::id());;

         {
//
        return view('my-account', [
            'user' => $user,
            'orders' => $orders,
        ]);

         }
    //
    }


}
