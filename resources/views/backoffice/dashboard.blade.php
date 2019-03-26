@extends('backoffice.layout-bo')

@section('title', 'DASHBOARD')

@section('content')

    {{--<div class="row align-items-center">--}}
        {{--<div class="col">--}}
            {{--<img class="" src="{{ asset ('images/welcomeChat.png') }}">--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>--}}
        {{--</div>--}}
    {{--</div>--}}

<<<<<<< HEAD


    <div class="d-flex">
        // DERNIERS PRODUITS AJOUTES //
        <div class="p-2 bg-info flex-fill">

            Blablabla
            @if (null!==session()->get('name[]'))
                @foreach (session()->get('name[]') as $key => $name)
                    <div class="alert alert-info" role="alert">
                        Le produit {{$name}} a été ajouté.
                    </div>
                @endforeach
            @endif

        </div>


        // DERNIERES MODFIICATIONS DE PRODUIT //
        <div class="p-2 bg-warning flex-fill">
            <div id="accordion">
                @foreach ($lastmodifications as $key => $lastmodification)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Modification du produit {{ $lastmodifications->old_name }} à {{ $lastmodifications->time }}
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="p-2 bg-primary flex-fill">Flex item 3</div>
    </div>




    <div class="d-flex">
        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Derniers produits ajoutés</h3>
                </button>
                @if (null!==session()->get('name[]'))
                    @foreach (session()->get('name[]') as $key => $name)
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">.</h5>
                                <small>.</small>
                            </div>
                            <p class="mb-1">Le produit {{$name}} a été ajouté.</p>
                            <small>.</small>
                        </a>
                    @endforeach
                @else
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Aucun produit n'a été ajouté récemment</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Aucun produit n'a été ajouté récemment. Aucun produit n'a été ajouté récemment.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                @endif



            </div>
        </div>



        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Derniers produits modifiés</h3>
                </button>
                @foreach ($cancels as $key => $cancel)
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Produit : {{ $cancel->old_name }}</h5>
                            <small>{{ $cancel->time }}</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                @endforeach
            </div>
        </div>



        <div class="p-2">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    <h3>Dernières commandes</h3>
                </button>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
            </div>
        </div>




@endsection
