@extends('backoffice.layout-bo')

@section('title', 'DASHBOARD')

@section('content')

    <div class="d-flex">
        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Derniers produits ajoutés</h3>
                </button>
                @if (null!==session()->get('name[]'))
                    @foreach (session()->get('name[]') as $key => $name)
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">.</h5>
                                <small>.</small>
                            </div>
                            <p class="mb-1">Le produit {{$name}} a été ajouté.</p>
                            <small>.</small>
                        </a>
                    @endforeach
                @else
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Aucun produit n'a été ajouté récemment</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Aucun produit n'a été ajouté récemment. Aucun produit n'a été ajouté récemment.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                @endif
            </div>
        </div>

        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Derniers produits modifiés</h3>
                </button>
                @foreach ($cancels as $key => $cancel)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Produit : {{ $cancel->old_name }}</h5>
                            <small>{{ $cancel->time }}</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Dernières commandes</h3>
                </button>

                @foreach($lastOrders as $order)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $order->user->name }}</h5>
                            <small>{{ $order->date() }}</small>
                        </div>
                        <p class="mb-1">Prix total : {{ $order->totalPrice() }} €</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

@endsection