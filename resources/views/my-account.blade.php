@extends('layout')

@section('title', 'Votre compte')

@section('content')

    @foreach ($users as $user)
        <p class="text-center"> User name: {{ $user->name }}</p>
        <p class="text-center"> User email: {{ $user->email }}</p>
        <p class="text-center"> User id: {{ $user->id }}</p>
    @endforeach


{{--{{var_dump($users)}}--}}


@endsection