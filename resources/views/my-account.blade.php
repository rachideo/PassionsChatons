@extends('layout')

@section('title', 'Votre compte')

@section('content')

    <div class = "container">
        <div class="row">
            <div class="col-md p-4 m-4">
                <h3>Infos sur votre compte</h3> <br>
                    <p> User name: {{ $user->name }}</p>
                    <p> User email: {{ $user->email }}</p>
                    <p> User id: {{ $user->id }}</p>
                <button type="submit" class="btn btn-primary">Editer</button>
            </div>
            <div class="col-md p-4 m-4">
                <h3>Infos sur vos commandes</h3> <br>

                @foreach ($user->orders as $order)
                    <h4>Commande n°{{ $order->id }}</h4><br>
                    @foreach($order->products as $product)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $product->image}}" alt="Card image cap">
                            <div class="card-body">
                                <p> Product name: {{ $product->name}}</p>
                                <p> Quantity: {{ $product->pivot->quantity }}</p>
                            </div>
                        </div> <br>
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>


@endsection