@extends('backoffice.layout-bo')

@section('title', 'Commandes passées')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('bo_orders_list','sort=price')}}">prix</a>
            <a class="dropdown-item" href="{{ route('bo_orders_list','sort=date')}}">date</a>
        </div>
    </div>

    @foreach ($orders as $order)

        <a href="{{ route('bo_order_details', $order->id) }}">
            <div class="row align-items-center article my-1 p-2 justify-content-md-center">
                <div class="col-md-4 m-2">
                    <h3 class="">Commande n° {{ $order->id }}</h3>
                </div>
                <div class="col-md-5 m-2">
                    <h4 class="m-0 ">{{ $order->created_at }}</h4>
                </div>
                <div class="case_prix col-md-2 p-1">
                    <p class="text-center prix">{{ $order->orderTotal / 100 }} €</p>
                </div>
            </div>
        </a>

    @endforeach

@endsection