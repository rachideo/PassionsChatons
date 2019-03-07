@extends('layout')

@section('title', 'Cat-alogue')

@section('content')

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('product.list.sort.price')}}">prix</a>
            <a class="dropdown-item" href="{{ route('product.list.sort.name')}}">nom</a>
        </div>
    </div>

    @foreach ($tableau as $key => $chaton)
        <div class="row align-items-center article my-3 p-3 justify-content-md-center">
            <div class="col-md-2">
                <a href="{{ route('product.detail',$chaton->name)}}"><img class="mx-auto mx-md-0 rounded-circle" src="{{ $chaton->photo }}" alt="Photo" ></a>
            </div>
            <div class="col-md-3 m-4">
                <a href="{{ route('product.detail',$chaton->name)}}"><h2 class="text-center">{{ $chaton->name }}</h2></a>
            </div>
            <div class="case_prix col-md-2 p-2">
                <p class="text-center prix">{{ $chaton->prix / 100 }} €</p>
            </div>
            <div class="col-md-3 p-4">
                <div class="text-center custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="{{ $key }}" id="{{ $key  }}" value="1">
                    <label class="custom-control-label" for="{{ $key  }}">Ajouter au panier</label>
                </div>
            </div>
        </div>
    @endforeach

@endsection