@extends('backoffice.layout-bo')

@section('title', 'Accueil Backoffice')

@section('content')

    <div class="row align-items-center">
        <div class="col">
            <img class="" src="{{ asset ('images/welcomeChat.png') }}">
        </div>
        <div class="col">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>
        </div>
    </div>

    @if (null!==session()->get('name[]'))
    @foreach (session()->get('name[]') as $key => $name)
        <div class="alert alert-info" role="alert">
            Le produit {{$name}} a été ajouté.
        </div>
        @endforeach
    @endif

@endsection