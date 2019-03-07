@extends('layout')

@section('title', 'Cat-alogue')

@section('content')

    {{--<pre>--}}
    {{--@php--}}
        {{--var_dump($tableau);--}}
    {{--@endphp--}}
    {{--</pre>--}}

<form action="{{ route('basket') }}" method="POST">
    @csrf

    @foreach ($chatons as $chaton)

        <div class="row align-items-center article my-3 p-3 justify-content-md-center">
            <div class="col-md-2">
                <a href=""><img class="mx-auto mx-md-0 rounded-circle" src="/{{ $chaton->image }}"></a>
            </div>
            <div class="col-md-3 m-4">
                <a href=""><h2 class="text-center">{{ $chaton->name }}</h2></a>
            </div>
            <div class="case_prix col-md-2 p-2">
                <p class="text-center prix">{{ $chaton->price / 100}} €</p>
            </div>
            <div class="col-md-3 p-4">
                <div class="text-center custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="toAdd[]" id="{{ $chaton->id }}" value="{{ $chaton->id }}">
                    <label class="custom-control-label" for="{{ $chaton->id }}">Ajouter au panier</label>
                </div>
            </div>
        </div>

    @endforeach

    <input type="submit" value="Ajouter au panier" class="mx-auto my-4 btn btn-primary">
</form>

@endsection