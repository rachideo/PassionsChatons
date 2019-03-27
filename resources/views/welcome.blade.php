@extends('layout')

@section('title', 'Accueil')

@section('content')

    @if (session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif

    <div class="row align-items-center">
        <div class="col">
            <img class="" src="{{ asset ('images/welcomeChat.png') }}">
        </div>
        <div class="col">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>
        </div>
    </div>
@endsection