<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackofficeUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function index(Request $request)
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



    public function show()
    {
        //
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


}
