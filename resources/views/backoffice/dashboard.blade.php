@extends('backoffice.layout-bo')

@section('title', 'Accueil Backoffice')

@section('content')

    {{--<div class="row align-items-center">--}}
        {{--<div class="col">--}}
            {{--<img class="" src="{{ asset ('images/welcomeChat.png') }}">--}}
        {{--</div>--}}
        {{--<div class="col">--}}
            {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet atque blanditiis cum doloribus esse hic incidunt inventore ipsa minus nihil numquam, optio pariatur qui recusandae rem repudiandae tenetur, ut.</p>--}}
        {{--</div>--}}
    {{--</div>--}}



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




@endsection