@extends('backoffice.layout-bo')

@section('title', 'Édition de produit')

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

    <form method="POST" action="{{route('update.product')}}">
        @csrf
        @method('PUT')
        <h1>Produit : {{$articleDetails->name}}</h1>
        <div class="form-group">
            <input type="text" class="form-control" name="new_name" value="{{$articleDetails->name}}"/>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <div class="form-group">
            <label for="prix"><b>Nouveau prix : </b></label>
            <input type="text" class="form-control" name="new_prix" value="{{$articleDetails->prix}}"/>
        </div>
        <div class="form-group">
            <label for="photo"><b>Nouvel URL Photo :</b></label>
            <input type="text" class="form-control" name="new_photo" value="{{$articleDetails->photo}}"/>
        </div>
        <div class="form-group">
            <label for="description"><b>Nouvelle description :</b></label>
            <input type="text" class="form-control" name="new_description" value="{{$articleDetails->description}}"/>
        </div>
        <button type="submit" class="btn btn-primary">MODIFIER</button>
    </form>
    <br>
    <form method="POST" action="{{route('update.product')}}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
    </form>
@endsection



