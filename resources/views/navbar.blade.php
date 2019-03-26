<nav class="navbar navbar-expand-lg navbar-light header justify-content-between">
    <a href="{{ route('welcome') }}" class="navbar-brand">
        <h1 class="mx-2 nav-title">passionChatons.pink</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product_list') }}">Cat-alogue</a>
            </li>
            <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('product_list_pups') }}">Dog-alogue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('basket_index') }}">Mon panier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link align-middle d-block" href="{{ route('my_account') }}">{{ Auth::user()->name }}</a>
                </li>
            @endauth
        </ul>
        @guest
            <ul class="navbar-nav mr-2">
                <li class="nav-item">
                    <a class="nav-link align-middle d-block" href="{{ route('login') }}">Identification</a>
                </li>
            </ul>
            <a href="{{ route('login') }}">
                <img alt="S'identifier" src="{{ asset('images/icon-myAccount.png') }}" class="">
            </a>
        @else
            <ul class="navbar-nav mr-2">
                <li class="nav-item">
                    <a class="nav-link align-middle d-block" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Déconnexion
                        <img alt="Déconnexion" src="{{ asset('images/icon-myAccount.png') }}" class="ml-2 d-none d-md-inline-block ">
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</nav>

