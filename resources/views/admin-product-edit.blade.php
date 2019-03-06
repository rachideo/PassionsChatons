@extends('layout')

@section('title', $chaton->nom)

@section('content')


    <div class="container-fluid bg-3 text-center">
        <img src ="{{ asset($chaton->image) }}" class="rounded mx-auto d-block img-borders my-3" >
        <form action="" method="">
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3> Nom : {{ $chaton->name }}</h3>
                    <label class="d-inline-block mx-1" for="price">Nouveau nom :</label>
                    <input class="d-inline-block qte form-control" type="text" name="price" id="price" placeholder="{{ $chaton->name }}" value="">
                </div>
                <div class="col">
                    <h3> Prix actuel : {{ $chaton->price / 100 }} €</h3>
                    <label class="d-inline-block mx-1" for="price">Nouveau prix :</label>
                    <input class="d-inline-block qte form-control" type="text" name="price" id="price" placeholder="{{ $chaton->price / 100 }}" value="">
                </div>
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3>Description</h3>
                    <p class="container-fluid bg-3 text-center" >{{ $chaton->description }}</p>
                </div>
                <div class="col">
                    <label class="d-inline-block" for="description">Nouvelle description :</label>
                    <textarea class="d-inline-block form-control h-75" name="description" id="description" placeholder="{{ $chaton->description }}" value=""></textarea>
                </div>
            </div>
            <input type="submit" value="Enregistrer les modifications" class="mx-auto my-4 btn btn-primary">
        </form>
    </div>


@endsection