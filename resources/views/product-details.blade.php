@extends('layout')

@section('title', $articleDetails['nom'])

@section('content')

    <img src ="{{ asset ($articleDetails['photo']) }}" class="rounded mx-auto d-block" > <br>
     <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $articleDetails['prix'] }} </h3>
        </div><br>
    <p class="container-fluid bg-3 text-center" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>
@endsection