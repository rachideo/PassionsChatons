@extends('layout')

@section('title', $chaton->nom)

@section('content')

    <div class="container-fluid bg-3 text-center">
        <img src ="{{ asset($chaton->image) }}" class="rounded mx-auto d-block img-borders my-3" >
        <form action="{{ route('product.update.admin') }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $chaton->id }}">
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3>Nom</h3>
                    {{--<label class="d-inline-block mx-1" for="name">Nouveau nom :</label>--}}
                    <input class="d-inline-block form-control" type="text" name="name" id="name" value="{{ $chaton->name }}">
                </div>
                <div class="col">
                    <h3>Prix en centimes d'euros</h3>
                    {{--<label class="d-inline-block mx-1" for="price">Nouveau prix (en cents):</label>--}}
                    <input class="d-inline-block form-control" type="text" name="price" id="price" value="{{ $chaton->price }}">
                </div>
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3>Description</h3>
                    <p class="container-fluid bg-3 text-center" >{{ $chaton->description }}</p>
                </div>
                <div class="col">
                    {{--<label class="d-inline-block" for="description">Nouvelle description :</label>--}}
                    <textarea class="d-inline-block form-control h-100" name="description" id="description" value="{{ $chaton->description }}"></textarea>
                </div>
            </div>
            <input type="submit" value="Enregistrer les modifications" class="mx-auto my-4 btn btn-primary">
        </form>
    </div>

@endsection