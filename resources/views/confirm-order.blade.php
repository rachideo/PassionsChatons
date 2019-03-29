@extends('layout')

@section('title', 'Commande validée')

@section('content')

    <h3 class="d-block text-center mb-3">commande n° {{ $order->id }} en date du {{ $order->date() }}</h3>
    <h4 class="d-block text-center ">à destination de {{ $order->user->name }}</h4>
    <p class="d-block text-center"><a href="mailto:{{ $order->user->email }}">&#9993; {{ $order->user->email }}</a></p>

    <div class="row">
        <div class="col">
            <h4>Adresse de facturation :</h4>
            <p>
                {{ $order->addressBilling->streetNumber }} {{ $order->addressBilling->streetName }}<br>
                {{ $order->addressBilling->zipcode }} {{ $order->addressBilling->city }}, {{ $order->addressBilling->country }}
            </p>
        </div>
        <div class="col text-right">
            <h4>Adresse de livraison :</h4>
            <p>
                {{ $order->addressDelivery->streetNumber }} {{ $order->addressDelivery->streetName }}<br>
                {{ $order->addressDelivery->zipcode }} {{ $order->addressDelivery->city }}, {{ $order->addressDelivery->country }}
            </p>
        </div>
    </div>

    <h3 class="my-4">Contenu :</h3>

    @foreach($order->products as $article)

        <hr class="my-1">

        <div class="row align-items-center justify-content-center p-3">
            <div class="col col-md-3 ">
                <h4>{{ $article->name }}</h4>
            </div>
            <div class="col col-md-3">
                <p class="text-center m-0">{{ $article->pivot->quantity }} x {{ $article->price / 100 }} €</p>
            </div>
            <div class="col col-md-3">
                <p class="text-right m-0">{{ $article->pivot->quantity * $article->price / 100 }} €</p>
            </div>
        </div>

    @endforeach

    <hr class="my-1">

    <div class="row align-items-center justify-content-center p-3">
        <div class="col col-md-9">
            <p class="text-right m-0">Total de la commande : {{ $order->totalPrice() }} €</p>
        </div>
    </div>
@endsection