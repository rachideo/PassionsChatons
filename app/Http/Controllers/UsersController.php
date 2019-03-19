<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\Support\Facades\DB;

class UsersController extends Controller {


    public function show() {
    $user = \App\User::all();

        if (isset($user)) {
        return view('my-account')->with('userDetails', $user);
        } else {
        return back();
}
    //
}



}
