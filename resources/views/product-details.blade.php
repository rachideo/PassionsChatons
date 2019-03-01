@extends('layout')

@section('title', $articleDetails['nom'])

@section('content')

    <img src ="{{ asset ($articleDetails['photo']) }}" class="rounded mx-auto d-block img-borders" > <br>
     <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $articleDetails['prix'] }} €</h3>
        </div><br>
    <p class="container-fluid bg-3 text-center" >{{ $articleDetails['description'] }}</p>
@endsection