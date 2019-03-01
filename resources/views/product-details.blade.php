@extends('layout')

@section('title', 'Détail produit')

@section('content')
    <div  class ="myBorder">
    <img src ="{{ asset ($articleDetails['photo']) }}" class="rounded mx-auto d-block">
    </div>
    {{ $articleDetails['nom'] }}<br>
    {{ $articleDetails['prix'] }}<br>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>
@endsection