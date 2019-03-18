@extends('layout')

@section('title', $articleDetails->name)

@section('content')

    <img src ="{{ asset ($articleDetails->photo) }}" alt="" class="rounded mx-auto d-block img-borders" > <br>
    <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $articleDetails->prix / 100 }} €</h3>
    </div><br>
    <p class="container-fluid bg-3 text-center" >{{ $articleDetails->description }}</p>

@endsection
