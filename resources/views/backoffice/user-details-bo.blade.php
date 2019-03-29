@extends('backoffice.layout-bo')

@section('title', 'Modifier informations utilisateur')

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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nom :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name ="nom" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">E-mail :</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name ="email" value="{{$user->email}}">
            </div>
        </div>
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Droit administrateur : </legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="oui" name="is_admin" value="1" @if ($user->is_admin === 1) checked @endif>
                        <label class="form-check-label" for="oui">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="non" name="is_admin" value="0" @if ($user->is_admin === 0) checked @endif>
                        <label class="form-check-label" for="non">
                            Non
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>

        @if (isset($user->addressBilling))

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Adresse facturation : </legend>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="aB_id" value="{{$user->addressBilling->id}}"/>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label class="col-form-label col-form-label-sm">N° de rue</label>
                                <input type="text" class="form-control form-control-sm" name="aB_streetNumber" value="{{$user->addressBilling->streetNumber}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="col-form-label col-form-label-sm">Nom de rue</label>
                                <input type="text" class="form-control form-control-sm" name="aB_streetName" value="{{$user->addressBilling->streetName}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label class="col-form-label col-form-label-sm">Code postal</label>
                                <input type="text" class="form-control form-control-sm" name="aB_zipcode" value="{{$user->addressBilling->zipcode}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="col-form-label col-form-label-sm">Ville</label>
                                <input type="text" class="form-control form-control-sm" name="aB_city" value="{{$user->addressBilling->city}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label class="col-form-label col-form-label-sm">Pays</label>
                                <input type="text" class="form-control form-control-sm" name="aB_country" value="{{$user->addressBilling->country}}">
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

                <fieldset class="form-group">
                    <div class="row">
                       <legend class="col-form-label col-sm-2 pt-0">Adresse livraison : </legend>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="aD_id" value="{{$user->addressDelivery->id}}"/>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label class="col-form-label col-form-label-sm">N° de rue</label>
                                    <input type="text" class="form-control form-control-sm" name="aD_streetNumber" value="{{$user->addressDelivery->streetNumber}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="col-form-label col-form-label-sm">Nom de rue</label>
                                    <input type="text" class="form-control form-control-sm" name="aD_streetName" value="{{$user->addressDelivery->streetName}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <label class="col-form-label col-form-label-sm">Code postal</label>
                                    <input type="text" class="form-control form-control-sm" name="aD_zipcode" value="{{$user->addressDelivery->zipcode}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label col-form-label-sm">Ville</label>
                                    <input type="text" class="form-control form-control-sm" name="aD_city" value="{{$user->addressDelivery->city}}">
                                </div>
                                <div class="form-group col-md-2">
                                    <label class="col-form-label col-form-label-sm">Pays</label>
                                    <input type="text" class="form-control form-control-sm" name="aD_country" value="{{$user->addressDelivery->country}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>

            <br>
        @elseif($user->addressBilling == null)
            <p>L'utilisateur ne possède pas d'adresse. Voulez vous en créer une ? </p>
            <div class="form-group col-md-3">
                <button type="button" class="btn btn-outline-primary"><a href="{{ route('bo_user_add_address',$user->id)}}" ">Ajouter une adresse à l'utilisateur</a></button>
            </div>
            <br>
        @endif

        <button type="submit" class="btn btn-secondary"  value="Update" >MODIFIER</button>
    </form>


    <form method="POST" action="{{ route('bo_delete_user') }}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{ $user->id }}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER L'UTILISATEUR</button>
    </form>

    <br>

@endsection