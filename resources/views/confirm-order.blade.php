@extends('layout')

@section('title', 'Commande validée')

@section('content')

    <h3 class="my-4">Contenu :</h3>

    @foreach($orderContent as $article)

        <hr class="my-1">

        <div class="row align-items-center justify-content-center p-3">
            <div class="col col-md-3 ">
                <h4>{{ $article['name'] }}</h4>
            </div>
            <div class="col col-md-3">
                <p class="text-center m-0">{{ $article['quantity'] }} x {{ $article['price'] / 100 }} €</p>
            </div>
            <div class="col col-md-3">
                <p class="text-right m-0">{{ $article['quantity'] * $article['price'] / 100 }} €</p>
            </div>
        </div>

    @endforeach

    <hr class="my-1">

    <div class="row align-items-center justify-content-center p-3">
        <div class="col col-md-9">
            <p class="text-right m-0">Total de la commande : {{ session('orderTotal') / 100 }} €</p>
        </div>
    </div>
@endsection