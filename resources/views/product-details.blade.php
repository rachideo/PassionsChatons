@extends('layout')

@section('title', $chaton[0]['name'])

{{--<pre>--}}
{{--@php--}}
    {{--var_dump($chaton);--}}
{{--@endphp--}}
{{--</pre>--}}

@section('content')
    <img src ="{{ asset($chaton[0]['image']) }}" class="rounded mx-auto d-block img-borders" > <br>
     <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $chaton[0]['price'] / 100 }} €</h3>
        </div><br>
    <p class="container-fluid bg-3 text-center" >{{ $chaton[0]['description'] }}</p>
@endsection