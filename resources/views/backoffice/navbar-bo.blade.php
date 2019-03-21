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
        </ul>
        <div class="nav-item">
            <a href="#">
                <img alt="S'identifier" src="{{ asset('images/icon-myAccount.png') }}" class="float-right w-25">
            </a>
        </div>
    </div>
</nav>