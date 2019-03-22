@extends('backoffice.layout-bo')

@section('title', 'Cat-alogue Backoffice')

@section('content')


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



    @if (null!==session()->get('undo'))
        @foreach (session()->get('undo') as $undo_foreach)
            <div class="alert alert-info" role="alert">
                Annuler la {{$undo_foreach['type']}} du produit {{$undo_foreach['product_info'][0]->name}} faite à {{$undo_foreach['time']}} ?
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form method="POST" action="{{ route('cancel_edit') }}">  {{--Annulation de la modification --}}
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{$undo_foreach['product_info'][0]->id}}"/>
                        </div>
                    <button type="submit" class="btn btn-outline-info"  value="Update" >OK</button>
                </form>
            </div>
        @endforeach
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
                    <a href="{{ route('bo_product_details',$chaton->name)}}"><img class="mx-auto mx-md-0 w-50 rounded-circle" src="{{ asset($chaton->image) }}" alt="Photo" ></a>
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