@extends('layout')

@section('title', 'Cat-alogue')

@section('content')

@foreach ($tableau as $key => $chaton)
        <div class="row align-items-center article my-3 p-3 justify-content-md-center">
            <div class="col-md-2">
                <a href="{{ route('product.detail',[$key])}}"><img class="mx-auto mx-md-0 rounded-circle" src="/{{ $chaton['photo'] }}"></a>
            </div>
            <div class="col-md-3 m-4">
                <a href="{{ route('product.detail',[$key])}}"><h2 class="text-center">{{ $chaton['nom'] }}</h2></a>
            </div>
            <div class="case_prix col-md-2 p-2">
                <p class="text-center prix">{{ $chaton['prix'] }} €</p>
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