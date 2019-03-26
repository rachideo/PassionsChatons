<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {
    $users = \App\User::all();

         {
        return view('my-account')->with('users', $users);
        }
    //
    }



}
