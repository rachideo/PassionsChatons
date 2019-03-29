<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;

class AddressesController extends Controller
{

    public function destroy(Request $request) // SUPPRESSION D'UNE ADRESSE
    {
        $user = User::find($request->user);



        if ($request->input('whichAdr') == "aD") {

            $addressToDelete = Address::find($user->address_id_delivery);

            Address::destroy($addressToDelete->id);
//            $user->update(['address_id_delivery'=>null]);



            return redirect()->route('bo_users_list')->with('status', 'L\'adresse de livraison a bien été supprimé');
        }
        elseif ($request->input('whichAdr') == "aB") {

            $addressToDelete = Address::find($user->address_id_billing);

            Address::destroy($addressToDelete->id);
//            $user->update(['address_id_billing'=>null]);


            return redirect()->route('bo_users_list')->with('status', 'L\'adresse  de facturation a bien été supprimé');
        }

        return redirect()->route('bo_users_list')->with('status', 'Aucune adresse n\' a été supprimé');
    }

}
