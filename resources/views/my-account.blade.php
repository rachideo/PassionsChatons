@extends('layout')

@section('title', 'Votre compte')

@section('content')

    <div class = "container">
        <div class="row">
            <div class="col-md p-4 m-4">
                <h3>Infos sur votre compte</h3>
                <p> User name: {{ $user->name }}<br>
                User email: {{ $user->email }}<br>
                User id: {{ $user->id }}</p>
                <h4>Adresse de facturation :</h4>
                <p>
                    {{ $user->addressBilling->streetNumber }} {{ $user->addressBilling->streetName }}<br>
                    {{ $user->addressBilling->zipcode }} {{ $user->addressBilling->city }}, {{ $user->addressBilling->country }}
                </p>
                <h4>Adresse de livraison :</h4>
                <p>
                    {{ $user->addressDelivery->streetNumber }} {{ $user->addressDelivery->streetName }}<br>
                    {{ $user->addressDelivery->zipcode }} {{ $user->addressDelivery->city }}, {{ $user->addressDelivery->country }}
                </p>
                <button type="submit" class="btn btn-primary" href="#">Editer</button>
            </div>

            <div class="col-md p-4 m-4">
                <h3>Infos sur vos commandes</h3>

                @foreach ($orders as $order)
                    <h4>Commande n°{{ $order->id }}</h4><br>
                    @foreach($order->products as $product)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $product->image}}" alt="Card image cap">
                            <div class="card-body">
                                <p> Product name: {{ $product->name}}</p>
                                <p> Quantity: {{ $product->pivot->quantity }}</p>
                                <p> Order date: {{ $order->created_at }}</p>
                            </div>
                        </div> <br>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>


@endsection