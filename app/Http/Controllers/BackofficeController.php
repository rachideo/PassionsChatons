<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Product;
use App\Cancel;
use Illuminate\Support\Facades\DB;


class BackofficeController extends Controller {

    /**
     * @param Request $request
     * @param  \Illuminate\Validation\Validator  $validator
     * @return \Illuminate\Http\RedirectResponse
     * @method bool validate(array $rules, ...$params) Validate the given request with the given rules.
     * @method array validated() Get the validated data from the request.
     * @return array
     * @return mixed
     */


    public function store(Request $request) // AJOUT DE NOUVEAU PRODUIT
    {
        $request->validate([
            'nom'=> 'required',
            'prix'=> 'required|integer|min:0',
            'photo'=> array(
                'required',
                'regex:/\.(jpg|jpeg|png|gif)$/',
            ),
            'description'=> 'required',
            'category_id'=>'required'
        ]);

        $name = $request->get('nom');

        $product = new Product;
        $product->name = $request->get('nom');
        $product->price = $request->get('prix');
        $product->image = '/images/'.$request->get('photo');
        $product->description = $request->get('description');
        $product->category_id = $request->get('category_id');
        $product->save();

        session()->push('name[]', $request->get('nom'));
        session()->push('add_time', date('H:i:s d-m-Y '));

        return redirect('admin/liste-produits')->with('status', 'Le produit a bien été ajouté')->with(['name'=> $name]);
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
//        dd($request);
        $request->validate([
            'nom'=> 'required',
            'prix'=> 'required|integer|min:0',
            'photo'=> array(
                'required',
                'regex:/\.(jpg|jpeg|png|gif)$/',
            ),
            'description'=> 'required'
        ]);

        $undo = [
            'type' => 'modification',
            'time' => date('H:i:s d-m-Y '),
            'product_info' => DB::table('products')->where('id', $request->get('id'))->get()
        ];

//        dd(DB::table('products')->where('id', $request->get('id'))->get());
        session()->push('undo', $undo);

        $cancel_edit = new Cancel;
        $cancel_edit->product_id = $undo["product_info"][0]->id;
        $cancel_edit->time = date('Y-m-d H:i:s');
        $cancel_edit->type = $undo["type"];
        $cancel_edit->old_name = $undo["product_info"][0]->name;
        $cancel_edit->old_price = $undo["product_info"][0]->price;
        $cancel_edit->old_image = $undo["product_info"][0]->image;
        $cancel_edit->old_description = $undo["product_info"][0]->description;
        $cancel_edit->save();

        $product = Product::find( $request->input('id'));
        $product->name = $request->input('nom');
        $product->price = $request->input('prix');
        $product->image = $request->input('photo');
        $product->description = $request->input('description');

        session()->push('modified_product', $product);

        $product->save();

        return redirect('admin/liste-produits')->with('status', 'Le produit a bien été modifié');
    }


    public function cancel(Request $request) // ANNULER UNE MODIFICATION DE PRODUIT
    {
        $newProduct = Product::find( $request->input('id'));
        $newProduct->name =  session()->get('undo.0.product_info.0')->name;
        $newProduct->price =  session()->get('undo.0.product_info.0')->price;
        $newProduct->image =  session()->get('undo.0.product_info.0')->image;
        $newProduct->description =  session()->get('undo.0.product_info.0')->description;

        session()->push('old_product', $newProduct);

        $newProduct->save();

        session()->pull('undo','default');

        return redirect('admin/liste-produits')->with('status', 'La modification du produit a bien été annulé');
    }


    public function destroy(Request $request) // SUPPRESSION DE PRODUIT
    {

        if (isset($request->check)) {

            $selected = $request->input('check');
            \App\Product::destroy($selected);

            if (count($selected) == 1) {
                $message = "Le produit a bien été supprimé.";
            } else {
                $message = "Les produits ont bien été supprimés.";
            }

            return redirect()->route('bo_products_list')->with('status', $message);

        } else {
            $product = $request->input('id');
            \App\Product::destroy($product);

            return redirect()->route('bo_products_list')->with('status', 'Le produit a bien été supprimé');
        }

    }


    public function index($product) // PAGE DETAIL PRODUIT AVEC FONCTION EDITION ET SUPPRESSION
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
            $sorted = $chatons->sortBy('price');
            $sorted->values()->all();
        } else {
            $sorted = $chatons;
        }

        return view('backoffice.products-list-bo')->with('tableau', $sorted);
    }


    public function dashboard() // LISTE DES PRODUITS AVEC FONCTION DE TRI
    {

        $cancel = \App\Cancel::all();

        return view('backoffice.dashboard')->with('cancels', $cancel);
    }






}
