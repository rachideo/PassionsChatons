@extends('adminLayout')

@section('title', 'Cat-alogue')

@section('content')
    <a href="{{ route('product.create.admin') }}">
        <div class="btn btn-primary">Nouvel article</div>
    </a>
    <form action="{{ route('product.delete.admin') }}" method="post">
        @method('DELETE')
        @csrf
        @foreach ($tableau as $chaton)
            <div class="row align-items-center article my-3 p-3 justify-content-md-center">
                <div class="col-md-2">
                    <a href="{{ route('product.detail.admin', $chaton->id) }}"><img class="mx-auto mx-md-0 rounded-circle" src="/{{ $chaton->image }}"></a>
                </div>
                <div class="col-md-3 m-4">
                    <a href="{{ route('product.detail.admin', $chaton->id) }}"><h2 class="text-center">{{ $chaton->name }}</h2></a>
                </div>
                <div class="case_prix col-md-2 p-2">
                    <p class="text-center prix">{{ $chaton->price / 100 }} €</p>
                </div>
                <div class="col-md-3 p-4">
                    <div class="text-center custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="check[]" id="{{ $chaton->id  }}" value="{{ $chaton->id  }}">
                        <label class="custom-control-label" for="{{ $chaton->id  }}">Supprimer produit</label>
                    </div>
                </div>
            </div>
        @endforeach

        @if($request->isMethod('DELETE'))
            <div class="row align-items-center">
                <div class="col">
                    <p class="text-center">{{ count($selected) }}
                        @if(count($selected) > 1) chatons ont correctement été supprimés.
                        @else chaton a correctement été supprimé.
                        @endif
                    </p>
                </div>
            </div>
        @endif

        @if($request->isMethod('put'))
            <div class="row align-items-center">
                <div class="col">
                    <p>Le chaton n°{{ $toUpdate->id }} a bien été modifié.</p>
                </div class="text-center">
            </div>
        @endif

        <input type="submit" value="Supprimer la sélection" class="mx-auto my-4 btn btn-primary">
    </form>

@endsection