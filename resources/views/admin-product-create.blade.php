@extends('layout')

@section('title', 'Créer un nouvel article')

@section('content')

        <form action="{{ route('product.store.admin') }}" method="POST">
            @csrf
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3>Nom</h3>
                    <input class="d-inline-block form-control" type="text" name="name" id="name" value="" required>
                </div>
                <div class="col">
                    <h3>Prix en centimes d'euros</h3>
                    <input class="d-inline-block form-control" type="text" name="price" id="price" value="" required>
                </div>
                <div class="col">
                    <h3>Image</h3>
                    <input class="d-inline-block form-control" type="text" name="image" id="image" value="" required>
                </div>
            </div>
            <div class="row form-group my-4 p-3 justify-content-center">
                <div class="col">
                    <h3>Description</h3>
                    <textarea class="d-inline-block form-control h-75" name="description" id="description" value="description" required></textarea>
                </div>
            </div>
            <input type="submit" value="Enregistrer les modifications" class="mx-auto my-4 btn btn-primary">
        </form>

@endsection