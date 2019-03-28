@extends('backoffice.layout-bo')

@section('title', $user->name)

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


    <form  method="POST" action="{{ route('bo_update_user') }}">
        @csrf
        @method('PUT')

        <h1>Utilisateur : {{$user->name}}</h1>

        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$user->id}}"/>
        </div>
        <br>
        <div class="form-group">
            <label>Nom :</label>
            <input type="text" class="form-control" name ="nom" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label>E-mail :</label>
            <input type="email" class="form-control" name ="email" value="{{$user->email}}">
            <br>
        </div>
        <div class="form-group">
            Droit administrateur :
            <div class="form-check form-check-inline">
                <div>
                    <input class="form-check-input" type="radio" id="oui" name="is_admin" value="1" @if ($user->is_admin === 1) checked @endif>
                    <label class="form-check-label" for="oui">Oui </label>
                </div>
                <div>
                    <input class="form-check-input" type="radio" id="non" name="is_admin" value="0" @if ($user->is_admin === 0) checked @endif>
                    <label class="form-check-label" for="non">Non</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary"  value="Update" >MODIFIER</button>
    </form>


    <form method="POST" action="{{ route('bo_delete_user') }}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
    </form>

    <br>

@endsection