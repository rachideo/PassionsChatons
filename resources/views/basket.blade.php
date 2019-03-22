@extends('layout')

@section('title', 'Panier')

@section('content')

    @if(!empty(session('basket')))

        <form action="{{ route('basket_update') }}" method="POST">
            @method('PUT')
            @csrf
                <div class="row justify-content-center">

                    @foreach (session('basket') as $itemId => $values)
                    <div class="col-10 col-md-6 col-lg-4 article align-items-center p-2 position-relative justify-content-center align-middle">
                        <img class="d-inline-block w-100 rounded-circle" src="{{ asset($values['image']) }}">
                        <div class="row form-group m-3 justify-content-center">
                            <input class="d-inline-block qte form-control-sm" type="number" min="1" name="{{ $itemId }}" id="quantity_{{ $itemId }}" value="{{ $values['quantity'] }}">
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
            <div class="col align-items-center align-middle">
                <h3 class="text-center">Total commande : {{ session('totalPrice') / 100 }} €</h3>
            </div>
        </div>
        <div class="m-3 row">
            <div class="col align-middle text-center">
                <a href="{{ route('order') }}" class="d-inline-block mx-auto btn btn-primary w-md-25">Valider la commande</a>
            </div>
        </div>

    @else

        <div class="row justify-content-center">
            <p>Votre panier est vide... Faites votre choix sur notre cat-alogue !</p>
        </div>

    @endif

@endsection