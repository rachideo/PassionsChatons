@extends('backoffice.layout-bo')

@section('title', $articleDetails->name)

@section('content')
<<<<<<< HEAD

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action="{{route('update.product')}}">
        @csrf
        @method('PUT')
        <h1>Produit : {{$articleDetails->name}}</h1>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <br>
        <div>
            <label for="name">Nom du produit :</label>
            <input type="text" class="form-control" name ="new_name" value="{{$articleDetails->name}}">
            <br>
        </div>
        <div class="container-fluid bg-3 text-center">
            <img src = "{{asset ($articleDetails->photo)}}" class="rounded mx-auto d-block img-borders">
        </div>
        <div class="form-group">
            <label for="photo">Image URL :</label>
            <input type="text" class="form-control" name ="new_photo" value="{{$articleDetails->photo}}">
        </div>
        <div class="form-group">
            <label for="prix">Prix (en €) :</label>
            <input type="text" class="form-control" name ="new_prix" value="{{$articleDetails->prix}}">
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <input type="text" class="form-control" name ="new_description" value="{{$articleDetails->description}}">
        </div>

        <button type="submit" class="btn btn-secondary"  value="Update" >MODIFIER</button>
    </form>

    <form method="POST" action="{{route('update.product')}}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
    </form>
    <br>
@endsection