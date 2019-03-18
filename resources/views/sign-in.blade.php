@extends('layout')

@section('title', 'Identification')

@section('content')
    <div class = "container">
        <div class="row">
            <div class="col">
                <h2> Identifiez vous</h2> <br>
                    <form>
                        <div class="form-group ">
                            <label for="InputEmail"> <h1>Adresse email</h1></label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword"> <h1>Mot de passe</h1></label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>

            <div class="col">
                <h2> Créer compte</h2> <br>
                    <form>
                        <div class="form-group ">
                            <label for="InputPrenom"> <h1>Prénom</h1></label>
                            <input type="text" class="form-control" id="InputPrenom" aria-describedby="emailHelp" placeholder="Votre prénom">
                        </div>
                        <div class="form-group ">
                            <label for="InputNomFamille"> <h1>Nom de famille</h1></label>
                            <input type="text" class="form-control" id="InputNomFamille" aria-describedby="emailHelp" placeholder="Votre nom de famille">
                        </div>
                        <div class="form-group ">
                            <label for="InputEmail"> <h1>Adresse email</h1></label>
                            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword"> <h1>Mot de passe</h1></label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Créer un mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary">Créer compte</button>
                    </form>
            </div>
        </div>
    </div>


@endsection