@extends('layout')

@section('title', 'Cat-alogue')

@section('content')

    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

<form action="{{ route('basket_store') }}" method="POST">
    @csrf

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('product_list','sort=price')}}">prix</a>
            <a class="dropdown-item" href="{{ route('product_list','sort=name')}}">nom</a>
        </div>
    </div>

    @foreach ($tableau as $key => $chaton)
        <div class="row align-items-center article my-3 p-3 justify-content-md-center">
            <div class="col-md-2">
                <a href="{{ route('product_detail',$chaton->name)}}"><img class="mx-auto mx-md-0 rounded-circle" src="{{ $chaton->image }}" alt="Photo" ></a>
            </div>
            <div class="col-md-3 m-4">
                <a href="{{ route('product_detail',$chaton->name)}}"><h2 class="text-center">{{ $chaton->name }}</h2></a>
            </div>
            <div class="case_prix col-md-2 p-2">
                <p class="text-center prix">{{ $chaton->price / 100 }} €</p>
            </div>
            <div class="col-md-3 p-4">
                <div class="text-center custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="toAdd[]" id="{{ $chaton->id }}" value="{{ $chaton->id }}"
                           @if (isset(session('basket')[$chaton->id])) checked @endif >
                    <label class="custom-control-label" for="{{ $chaton->id }}">Ajouter au panier</label>
                </div>
            </div>
        </div>

    @endforeach

    <input type="submit" value="Ajouter au panier" class="mx-auto my-4 btn btn-primary">
</form>

@endsection