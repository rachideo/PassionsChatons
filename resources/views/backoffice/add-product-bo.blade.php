@extends('backoffice.layout-bo')

@section('title', 'Ajout produit')

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

    <form method="POST" action="{{route('store_product')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="nom"/>
    </div>
    <div class="form-group">
        <label for="prix">Prix (en centime €) :</label>
        <input type="text" class="form-control" name="prix"/>
    </div>
    <div class="form-group">
        <label for="photo">Image :</label>
        <input type="text" class="form-control" name="photo"/>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" class="form-control" name="description"/>
    </div>
        <div class="form-group">
            <label for="category_id">Category id ( 1= Chaton, 2 = Chiot) :</label>
            <input type="text" class="form-control" name="category_id"/>
        </div>
    <button type="submit" class="btn btn-primary">AJOUTER</button>
    </form>

@endsection



