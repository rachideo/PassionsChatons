@extends('backoffice.layout-bo')

@section('title', 'Détail commande')

@section('content')

    <h3 class="my-4 d-block text-center">n° {{ $order->id }}</h3>

    <h3 class="my-4">Contenu :</h3>

    @foreach($order->orderLines as $orderLine)

        <hr class="my-1">

        <div class="row align-items-center justify-content-center p-3">
            <div class="col col-md-3 ">
                <h4>{{ $orderLine->name }}</h4>
            </div>
            <div class="col col-md-3">
                <p class="text-center m-0">{{ $orderLine->quantity }} x {{ $orderLine->price / 100 }} €</p>
            </div>
            <div class="col col-md-3">
                <p class="text-right m-0">{{ $orderLine->quantity * $orderLine->price / 100 }} €</p>
            </div>
        </div>

    @endforeach

    <hr class="my-1">

    <div class="row align-items-center justify-content-center p-3">
        <div class="col col-md-9">
            <p class="text-right m-0">Total de la commande : {{ $order->total / 100 }} €</p>
        </div>
    </div>

@endsection