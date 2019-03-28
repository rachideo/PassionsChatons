@extends('backoffice.layout-bo')

@section('title', 'GESTION DES UTILISATEURS')

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
            <a class="dropdown-item" href="{{ route('bo_users_list','sort=name')}}">nom</a>
            <a class="dropdown-item" href="{{ route('bo_users_list','sort=new')}}">date</a>
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Modifier</th>
                </tr>
            <thead>
            <tbody>
                @foreach ($tableau as $key => $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>...</td>
                        <td>{{ $user->created_at }}</td>
                        <td>@if($user->is_admin == 0)<a class="text-secondary">✘</a>@else()<a class="font-weight-bold">✔</a>@endif</td>
                        <td><a href="{{ route('bo_user_details',$user->id)}}">✐</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection