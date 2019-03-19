@extends('layout')

@section('title', 'Identification')

@section('content')
    <div class = "container ">
        <div class="row">
            <div class="col myForms">
                <h3> Identifiez vous</h3> <br>
                    <form method="GET" action="{{route('account')}}">
                        <div class="form-group">
                            <label for="InputEmail"> <h4>Adresse email</h4></label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword"> <h4>Mot de passe</h4></label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary whiteSubmit">Submit</button>
                    </form>
            </div>

            <div class="col myForms">
                <h3> Créer compte</h3> <br>
                    <form>
                        <div class="form-group">
                            <label for="InputPrenom"> <h4>Prénom</h4></label>
                            <input type="text" class="form-control" id="InputPrenom" aria-describedby="emailHelp" placeholder="Votre prénom">
                        </div>
                        <div class="form-group ">
                            <label for="InputNomFamille"> <h4>Nom de famille</h4></label>
                            <input type="text" class="form-control" id="InputNomFamille" aria-describedby="emailHelp" placeholder="Votre nom de famille">
                        </div>
                        <div class="form-group ">
                            <label for="InputEmail"> <h4>Adresse email</h4></label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword"> <h4>Mot de passe</h4></label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Créer un mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary whiteSubmit">Créer compte</button>
                    </form>
            </div>
        </div>
    </div>


@endsection