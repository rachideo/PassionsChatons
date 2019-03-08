<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class BackofficeController extends Controller {

    /**
     * @param Request $request
     * @method bool validate(array $rules, ...$params) Validate the given request with the given rules.
     * @method array validated() Get the validated data from the request.
     * @return mixed
     */


    public function store(Request $request) // AJOUT DE NOUVEAU PRODUIT
    {
        $request->validate([
            'new_name'=> 'required',
            'new_prix'=> 'required',
            'new_photo'=> 'required',
            'new_description'=> 'required'
        ]);

        $product = new Product;
        $product->name = $request->get('new_name');
        $product->prix = $request->get('new_prix');
        $product->photo = $request->get('new_photo');
        $product->description = $request->get('new_description');
//        dd($product);
        $product->save();

        return redirect('admin/liste-produits')->with('status', 'Le produit a bien été ajouté');
    }


    public function show($product) // FORMULAIRE DE MODIFICATION DE PRODUIT
    {
        $chaton = \App\Product::where('name',$product)->first();

        if (isset($chaton)) {
            return view('backoffice.edit-product-details-bo')->with('articleDetails', $chaton);
        } else {
            return back();
        }
    }


    public function update(Request $request) // MODIFICATION DE PRODUIT
    {
//        $chaton = \App\Product::where('name',$product)->first();
//        dd($chaton);
        $request->validate([
            'new_name'=> 'required',
            'new_prix'=> 'required',
            'new_photo'=> 'required',
            'new_description'=> 'required'
        ]);

        $product = \App\Product::find($request->get('id'));

        $product->name = $request->get('new_name');
        $product->prix = $request->get('new_prix');
        $product->photo = $request->get('new_photo');
        $product->description = $request->get('new_description');

        $product->save();

        return redirect('admin/liste-produits')->with('status', 'Le produit a bien été modifié');
    }


    public function index($product) // PAGE DETAIL PRODUIT AVEC BOUTON EDIT
    {
        $chaton = \App\Product::where('name',$product)->first();
        if (isset($chaton)) {
            return view('backoffice.product-details-bo')->with('articleDetails', $chaton);
        } else {
            return back();
        }
    }


    public function list(Request $request) // LISTE DES PRODUITS AVEC FONCTION DE TRI
    {

        $data = $request->input('sort');
        $chatons = \App\Product::all();
        if ($data == 'name') {
            $sorted = $chatons->sortBy('name');
            $sorted->values()->all();
        } elseif ($data == 'price') {
            $sorted = $chatons->sortBy('prix');
            $sorted->values()->all();
        } else {
            $sorted = $chatons;
        }

        return view('backoffice.products-list-bo')->with('tableau', $sorted);
    }

}
