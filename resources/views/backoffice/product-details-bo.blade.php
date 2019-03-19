@extends('backoffice.layout-bo')

@section('title', $articleDetails->name)

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{ route('update_product') }}">
        @csrf
        @method('PUT')
        <h1>Produit : {{$articleDetails->name}}</h1>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <br>
        <div>
            <label for="name">Nom du produit :</label>
            <input type="text" class="form-control" name ="nom" value="{{$articleDetails->name}}">
            <br>
        </div>
        <div class="container-fluid bg-3 text-center">
            <img src = "{{asset ($articleDetails->image)}}" class="rounded mx-auto d-block img-borders">
        </div>
        <div class="form-group">
            <label for="photo">Image :</label>
            <input type="text" class="form-control" name ="photo" value="{{$articleDetails->image}}">
        </div>
        <div class="form-group">
            <label for="prix">Prix (en centime €) :</label>
            <input type="text" class="form-control" name ="prix" value="{{$articleDetails->price}}">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" name ="description" value="{{$articleDetails->description}}">
        </div>

        <button type="submit" class="btn btn-secondary"  value="Update" >MODIFIER</button>
    </form>

    <form method="POST" action="{{ route('delete_product') }}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{ $articleDetails->id }}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
    </form>
    <br>
@endsection