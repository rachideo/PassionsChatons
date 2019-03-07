@extends('adminLayout')

@section('title', $chaton->name)

@section('content')
    <form action="{{ route('product.update.admin') }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row form-group my-4 p-3 justify-content-center">
            <div class="col-md-4">
                <input class="form-control" type="hidden" name="id" id="id" value="{{ $chaton->id }}">
                <img src ="{{ asset($chaton->image) }}" class="rounded mx-auto d-block img-borders my-3" >
            </div>
            <div class="col-md-8">
                <h3>Nom</h3>
                {{--<label class="d-inline-block mx-1" for="name">Nouveau nom :</label>--}}
                <input class="form-control" type="text" name="name" id="name" value="{{ $chaton->name }}">
                <h3>Prix en centimes d'euros</h3>
                {{--<label class="d-inline-block mx-1" for="price">Nouveau prix (en cents):</label>--}}
                <input class="form-control" type="text" name="price" id="price" value="{{ $chaton->price }}">
                <h3>Description</h3>
                <p class="container-fluid bg-3 text-center" >{{ $chaton->description }}</p>
                {{--<label class="d-inline-block" for="description">Nouvelle description :</label>--}}
                <textarea class="form-control" name="description" id="description" placeholder="{{ $chaton->description }}" value="{{ $chaton->description }}"></textarea>
            </div>
        </div>
        <input type="submit" value="Enregistrer les modifications" class="mx-auto my-4 btn btn-primary">
    </form>
@endsection