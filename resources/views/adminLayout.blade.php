<!doctype html>

<html lang="fr">

@include('headbo')

<body>

@include('navbarbo')

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