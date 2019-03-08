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

    <form method="POST" action="{{route('store.product')}}">
    @csrf
    <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" class="form-control" name="new_name"/>
    </div>
    <div class="form-group">
        <label for="prix">Prix :</label>
        <input type="text" class="form-control" name="new_prix"/>
    </div>
    <div class="form-group">
        <label for="photo">URL Photo:</label>
        <input type="text" class="form-control" name="new_photo"/>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <input type="text" class="form-control" name="new_description"/>
    </div>
    <button type="submit" class="btn btn-primary">AJOUTER</button>
    </form>

@endsection


