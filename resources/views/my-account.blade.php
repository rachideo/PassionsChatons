@extends('layout')

@section('title', 'Entrez vos identifiants')

@section('content')

    <form>
        <div class="form-group">
            <label for="InputEmail"> <h2>Adresse email</h2></label>
            <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Entrez votre email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="InputPassword"> <h2>Mot de passe</h2></label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Entrez votre mot de passe">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection