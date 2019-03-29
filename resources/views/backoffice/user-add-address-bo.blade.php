@extends('backoffice.layout-bo')

@section('title', 'Ajouter des adresses à un utilisateur')

@section('content')


    <form  method="POST" action="{{ route('bo_create_user_add',$user->id) }}">
        @csrf
        @method('PUT')

        <h1>Utilisateur : {{$user->name}}</h1>

        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Adresse facturation : </legend>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="{{$user->id}}"/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="aB_id" value=""/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label class="col-form-label col-form-label-sm">N° de rue</label>
                            <input type="text" class="form-control form-control-sm" name="aB_streetNumber" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label col-form-label-sm">Nom de rue</label>
                            <input type="text" class="form-control form-control-sm" name="aB_streetName" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label class="col-form-label col-form-label-sm">Code postal</label>
                            <input type="text" class="form-control form-control-sm" name="aB_zipcode" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label col-form-label-sm">Ville</label>
                            <input type="text" class="form-control form-control-sm" name="aB_city" value="">
                        </div>
                        <div class="form-group col-md-2">
                            <label class="col-form-label col-form-label-sm">Pays</label>
                            <input type="text" class="form-control form-control-sm" name="aB_country" value="">
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
                        <input type="hidden" class="form-control" name="aD_id" value=""/>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label class="col-form-label col-form-label-sm">N° de rue</label>
                            <input type="text" class="form-control form-control-sm" name="aD_streetNumber" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="col-form-label col-form-label-sm">Nom de rue</label>
                            <input type="text" class="form-control form-control-sm" name="aD_streetName" value="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label class="col-form-label col-form-label-sm">Code postal</label>
                            <input type="text" class="form-control form-control-sm" name="aD_zipcode" value="">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="col-form-label col-form-label-sm">Ville</label>
                            <input type="text" class="form-control form-control-sm" name="aD_city" value="">
                        </div>
                        <div class="form-group col-md-2">
                            <label class="col-form-label col-form-label-sm">Pays</label>
                            <input type="text" class="form-control form-control-sm" name="aD_country" value="">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-secondary"  value="Update" >ENREGISTRER</button>
    </form>

    <br>

@endsection