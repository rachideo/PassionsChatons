<nav class="navbar navbar-expand-lg navbar-light header justify-content-between">
    <a href="{{ route('bo_dashboard') }}" class="navbar-brand">
        <h1 class="mx-2 nav-title">passionChaton.love</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">Retour FrontOffice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add_product') }}">Ajout Produit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bo_products_list') }}">Cat-alogue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bo_orders_list', 'sort=date') }}">Commandes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bo_users_list')}}">Utilisateurs</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-2">
            <li class="nav-item">
                <a class="nav-link align-middle d-block p-0" href="{{ route('logout') }}"
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
    </div>
</nav>