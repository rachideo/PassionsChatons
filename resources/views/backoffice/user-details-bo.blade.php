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
            <label for="name">Nom :</label>
            <input type="text" class="form-control" name ="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" class="form-control" name ="email" value="{{$user->email}}">
            <br>
        </div>
        <div class="form-group">
            <label for="is_admin">Droit administrateur :</label><br>
            <input type="checkbox" name="is_admin" value="1" @if ($user->is_admin === 1) checked @endif >
        </div>

        <button type="submit" class="btn btn-secondary"  value="Update" >MODIFIER</button>
    </form>

    {{--<form method="POST" action="{{ route('delete_product') }}">--}}
        {{--@csrf--}}
        {{--@method('DELETE')--}}
        {{--<div class="form-group">--}}
            {{--<input type="hidden" class="form-control" name="id" value="{{ $articleDetails->id }}"/>--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-danger">SUPPRIMER</button>--}}
    {{--</form>--}}

    <br>

@endsection