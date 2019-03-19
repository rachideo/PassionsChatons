@extends('layout')

@section('title', 'Votre compte')

@section('content')

    <p>Show user details<p>
    <p>Name, address, current orders, previous orders </p>


{{--{{var_dump($users)}}--}}

    @foreach ($users as $user)
    <p class="text-center"> User name: {{ $user->name }}</p>
    <p class="text-center"> User email: {{ $user->email }}</p>
    <p class="text-center"> User id: {{ $user->id }}</p>
        @endforeach
@endsection