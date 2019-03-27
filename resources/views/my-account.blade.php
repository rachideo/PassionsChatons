@extends('layout')

@section('title', 'Votre compte')

@section('content')

    <div class = "container ">
        <div class="row">
            <div class="col-md p-4 m-4">
                <h3>Infos sur votre compte</h3> <br>
                @foreach ($users as $user)
                    <p> User name: {{ $user->name }}</p>
                    <p> User email: {{ $user->email }}</p>
                    <p> User id: {{ $user->id }}</p>
                @endforeach
                <button type="submit" class="btn btn-primary">Editer</button>
            </div>
            <div class="col-md p-4 m-4">
                <h3>Infos sur vos commandes</h3> <br>

                @foreach ($orders as $order)
                    <p> Order id: {{ $order->id }}</p>
                    <p> Order user id: {{ $order->user_id }}</p>
                    <p> Order quantity: {{ $order->quantity }}</p>
                @endforeach

            </div>
        </div>
    </div>







{{--{{var_dump($users)}}--}}


@endsection