<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;

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

        $adr = $user->addressBilling;
        $conditionAddressB = [
            'streetNumber' => $adr->streetNumber,
            'streetName' => $adr->streetName,
            'zipcode' => $adr->zipcode,
            'city' => $adr->city,
            'country' => $adr->country, ];

        $addressB = new Address;
        $addressB->streetNumber = $request->input('aB_streetNumber');
        $addressB->streetName = $request->input('aB_streetName');
        $addressB->zipcode = $request->input('aB_zipcode');
        $addressB->city = $request->input('aB_city');
        $addressB->country = $request->input('aB_country');

        if ($conditionAddressB != $addressB->getAttributes()) { // Si les nouvelles valeurs sont différentes alors :
            $addressB->save(); // Si l'adresse facture et livraison sont la même alors besoin que d'un seul save
            $user->address_id_billing = Address::orderBy('id', 'desc')->first()->id;
            $user->save(); // L'utilisateur sauvegarde le nouvel id de son adress_id_billing
        }

        $adrD = $user->addressDelivery;
        $conditionAddressD = [
            'streetNumber' => $adrD->streetNumber,
            'streetName' => $adrD->streetName,
            'zipcode' => $adrD->zipcode,
            'city' => $adrD->city,
            'country' => $adrD->country, ];

        $addressD = new Address;
        $addressD->streetNumber = $request->input('aD_streetNumber');
        $addressD->streetName = $request->input('aD_streetName');
        $addressD->zipcode = $request->input('aD_zipcode');
        $addressD->city = $request->input('aD_city');
        $addressD->country = $request->input('aD_country');

        if ($conditionAddressD != $addressD->getAttributes()) { // Si les nouvelles valeurs sont différentes alors :
            $addressD->save(); // Les adresses facture et livraison sont différents, il faut donc save une deuxieme fois pr l'autre adresse
            $user->address_id_delivery = Address::orderBy('id', 'desc')->first()->id;
            $user->save(); // L'utilisateur sauvegarde le nouvel id de son adress_id_delivery
        }

        return redirect('admin/utilisateurs')->with('status', 'L\'utilisateur a bien été modifié');
    }


    public function destroy(Request $request) // SUPPRESSION DE PRODUIT
    {
            $user = $request->input('id');
            \App\User::destroy($user);

            return redirect()->route('bo_users_list')->with('status', 'L\'utilisateur bien été supprimé');
    }



    public function add($user) // AJOUTER UNE ADRESSE UTILISATEUR
    {
        $utilisateur = \App\User::where('id',$user)->first();

        if (isset($utilisateur)) {
            return view('backoffice.user-add-address-bo')->with('user', $utilisateur);

        } else {
            return back();
        }
    }

    public function createAddress(Request $request) // MODIFICATION DES USERS
    {
        $user = User::find( $request->input('id'));

        $addressB = new Address;
        $addressB->streetNumber = $request->input('aB_streetNumber');
        $addressB->streetName = $request->input('aB_streetName');
        $addressB->zipcode = $request->input('aB_zipcode');
        $addressB->city = $request->input('aB_city');
        $addressB->country = $request->input('aB_country');
        $addressB->save(); // Si l'adresse facture et livraison sont la même alors besoin que d'un seul save
        $user->address_id_billing = Address::orderBy('id', 'desc')->first()->id;
        $user->save(); // L'utilisateur sauvegarde le nouvel id de son adress_id_billing

        $addressD = new Address;
        $addressD->streetNumber = $request->input('aD_streetNumber');
        $addressD->streetName = $request->input('aD_streetName');
        $addressD->zipcode = $request->input('aD_zipcode');
        $addressD->city = $request->input('aD_city');
        $addressD->country = $request->input('aD_country');
        $addressD->save(); // Les adresses facture et livraison sont différents, il faut donc save une deuxieme fois pr l'autre adresse
        $user->address_id_delivery = Address::orderBy('id', 'desc')->first()->id;
        $user->save(); // L'utilisateur sauvegarde le nouvel id de son adress_id_delivery

        return redirect('admin/utilisateurs')->with('status', 'L\'utilisateur a bien été modifié');
    }

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


}
