@extends('layout')

@section('title', 'Détail produit')

@section('content')
    {{ $articleDetails['nom'] }}<br>
    {{ $articleDetails['prix'] }}<br>
    {{ $articleDetails['photo'] }}
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>
@endsection