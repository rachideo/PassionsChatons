@extends('backoffice.layout-bo')

@section('title', $articleDetails->name)

@section('content')
    <a href="{{ route('edit.product',$articleDetails->name)}}"><button type="button" class="btn btn-outline-danger">EDIT</button></a>
    <img src ="{{ asset ($articleDetails->photo) }}" alt="" class="rounded mx-auto d-block img-borders" > <br>
    <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $articleDetails->prix / 100 }} €</h3>
    </div><br>
    <p class="container-fluid bg-3 text-center" >{{ $articleDetails->description }}</p>

@endsection



