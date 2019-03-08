@extends('layout')

@section('title', 'Panier')

@section('content')

    <form action="{{ route('basket.update') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row justify-content-center">
            @foreach (session('basket') as $itemId => $values)
            <div class="col-10 col-md-6 col-lg-4 article align-items-center p-2 position-relative justify-content-center align-middle">
                <img class="d-inline-block w-100 rounded-circle" src="{{ asset($values['image']) }}">
                <div class="row form-group m-3 justify-content-center">
                    <input class="d-inline-block qte form-control-sm" type="text" name="{{ $itemId }}" id="quantity_{{ $itemId }}" value="{{ $values['quantity'] }}">
                    <label class="d-inline-block mx-1" for="quantity_{{ $itemId }}">{{ $values['name'] }} demandés, soit {{ $values['quantity'] * ($values['price'] / 100) }} €</label>
                </div>
                <div class="infos position-absolute align-items-center mx-auto d-inline-block">
                    <h2 class="text-center">{{ $values['name'] }}</h2>
                    <p class="prix text-center">{{ $values['price'] / 100 }}€</p>
                    <button type="submit" class="text-center p-2 bin my-2 mx-auto d-block" name="{{ $itemId }}" value="0"></button>
                </div>
            </div>
            @endforeach
        </div>
        <input type="submit" value="Recalculer prix" class="mx-auto my-4 btn btn-primary">
    </form>
    <div class="m-3 row">
        <div class="col align-items-center p-2 align-middle">
            <p class="text-center">Total commande : {{ session('totalPrice') / 100 }} €</p>
        </div>
    </div>

    <!-- Formulaire de validation de commande -->
    <form method="post" action="">
        <input class="d-block form-control-sm mx-auto" type="text" name="customer" id="customer" placeholder="Votre Nom" value="">
        <input type="submit" value="Valider la commande" class="mx-auto my-2 btn btn-primary">
    </form>

    <!--
    <p class="d-block text-center">Erreur de saisie !</p>

    <form action="">
        <input type="submit" class="mx-auto my-4 btn btn-primary" value="Retour au panier">
    </form>

    <div class="row justify-content-center">
        <p>Votre panier est vide... Faites votre choix sur notre cat-alogue !</p>
    </div>
    -->

@endsection