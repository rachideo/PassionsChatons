@extends('layout')

@section('title', 'Identification')

@section('content')
    <div class = "container">
        <div class="row">
            <div class="col-md myForms p-4 m-4">
                <h3> Identifiez vous</h3> <br>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="InputEmail"> <h4>Adresse email</h4></label>
                            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="InputPassword"> <h4>Mot de passe</h4></label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="InputPassword" placeholder="Votre mot de passe">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Se souvenir de moi
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary whiteSubmit">Submit</button>
                    </form>

            </div>

            <div class="col-md myForms p-4 m-4">
                <h3>Créer compte</h3> <br>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="form-group">
                            <label for="InputPrenom">
                                <h4>Nom</h4>
                            </label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus id="InputPrenom" aria-describedby="emailHelp" placeholder="Votre prénom">

                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="InputEmail">
                                <h4>Adresse email</h4>
                            </label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required id="InputEmail" aria-describedby="emailHelp" placeholder="Votre email">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">
                                <h4>Mot de passe</h4>
                            </label>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="InputPassword" placeholder="Créer un mot de passe">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">
                                <h4>Confirmez le mot de passe</h4>
                            </label>
                            <input type="password" class="form-control" name="password_confirmation" required id="confirmPassword" placeholder="Retapez votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-primary whiteSubmit">Créer compte</button>
                    </form>
            </div>
        </div>
    </div>


@endsection