@extends('backoffice.layout-bo')

@section('title', 'Cat-alogue Backoffice')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Trier par
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('bo_products_list','sort=price')}}">prix</a>
            <a class="dropdown-item" href="{{ route('bo_products_list','sort=name')}}">nom</a>
        </div>
    </div>

    <form action="{{ route('delete_product') }}" method="post">
        @method('DELETE')
        @csrf

        @foreach ($tableau as $key => $chaton)
            <div class="row align-items-center article my-3 p-3 justify-content-md-center">
                <div class="col-md-2">
                    <a href="{{ route('bo_product_details',$chaton->name)}}"><img class="mx-auto mx-md-0 rounded-circle" src="{{ asset($chaton->image) }}" alt="Photo" ></a>
                </div>
                <div class="col-md-3 m-4">
                    <a href="{{ route('bo_product_details',$chaton->name)}}"><h2 class="text-center">{{ $chaton->name }}</h2></a>
                </div>
                <div class="case_prix col-md-2 p-2">
                    <p class="text-center prix">{{ $chaton->price / 100 }} €</p>
                </div>
                <div class="col-md-3 p-4">
                    <div class="text-center custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="check[]" id="{{ $chaton->id  }}" value="{{ $chaton->id }}">
                        <label class="custom-control-label" for="{{ $chaton->id  }}">Supprimer produit</label>
                    </div>
                </div>
            </div>
        @endforeach
        <input type="submit" value="Supprimer la sélection" class="mx-auto my-4 btn btn-primary">
    </form>

@endsection