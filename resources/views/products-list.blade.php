@extends('layout')

@section('title', 'Cat-alogue')

@section('content')

    {{--<pre>--}}
    {{--@php--}}
        {{--var_dump($tableau);--}}
    {{--@endphp--}}
    {{--</pre>--}}

@foreach ($tableau as $chaton)
        <div class="row align-items-center article my-3 p-3 justify-content-md-center">
            <div class="col-md-2">
                <a href="{{-- route('product.detail',[$key]) --}}"><img class="mx-auto mx-md-0 rounded-circle" src="/{{ $chaton->image }}"></a>
            </div>
            <div class="col-md-3 m-4">
                <a href="{{-- route('product.detail',[$key]) --}}"><h2 class="text-center">{{ $chaton->name }}</h2></a>
            </div>
            <div class="case_prix col-md-2 p-2">
                <p class="text-center prix">{{ $chaton->price }} €</p>
            </div>
            <div class="col-md-3 p-4">
                <div class="text-center custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox" name="{{ $chaton->id }}" id="{{ $chaton->id }}" value="1">
                    <label class="custom-control-label" for="{{ $chaton->id }}">Ajouter au panier</label>
                </div>
            </div>
        </div>
@endforeach




@endsection