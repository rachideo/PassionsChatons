<!doctype html>

<html lang="fr">

@include('backoffice.head-back')

<body>

@include('backoffice.navbar-bo')

<div class="container">
    <div class="titre my-md-4">
        <h1 class="display-4">
            @yield('title')
        </h1>
    </div>
    @yield('content')
</div>


</body>

@include('scripts')

</html>