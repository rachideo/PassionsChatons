<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BackofficeUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function list(Request $request) // LISTE DES USERS
    {
        $data = $request->input('sort');
        $users = \App\User::all();
        if ($data == 'name') {
            $sorted = $users->sortBy('name');
            $sorted->values()->all();
        } elseif ($data == 'new') {
            $sorted = $users->sortBy('created_at');
            $sorted->values()->all();
        } else {
            $sorted = $users;
        }

        return view('backoffice.users-list-bo')->with('tableau', $sorted);
    }


    public function index($user) // PAGE DETAIL UTILISATEUR
    {
        $utilisateur = \App\User::where('id',$user)->first();
//        dd($utilisateur);
//        $address = \App\Address::where('')

        if (isset($utilisateur)) {
            return view('backoffice.user-details-bo')->with('user', $utilisateur);
//            ->with('address', $address);
        } else {
            return back();
        }
    }


    public function update(Request $request) // MODIFICATION DES USERS
    {
        $request->validate([
            'nom'=> 'required',
            'email'=> 'required|email',
        ]);

        $user = User::find( $request->input('id'));
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->is_admin = $request->input('is_admin');

        $user->save();

        return redirect('admin/utilisateurs')->with('status', 'L\'utilisateur a bien été modifié');
    }


//    public function create()
//    {
//        //
//    }
//
//
//    public function store(Request $request)
//    {
//        //
//    }
//
//
//    public function edit($id)
//    {
//        //
//    }
//
//
//    public function destroy($id)
//    {
//        //
//    }


}
