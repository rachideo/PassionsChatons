



@section('content')
    <div>
        <a href="{{ route('edit.product',$articleDetails->name)}}"><button type="button" class="btn btn-outline-secondary">MODIFIER</button></a>
    </div>
    <img src ="{{ asset ($articleDetails->photo) }}" alt="" class="rounded mx-auto d-block img-borders" > <br>
    <div class="container-fluid bg-3 text-center">
        <h3>Price : {{ $articleDetails->prix / 100 }} €</h3>
    </div><br>
    <p class="container-fluid bg-3 text-center" >{{ $articleDetails->description }}</p>

@endsection





@section('title', $articleDetails->name)

@section('title')

@section('content')
    @csrf
    @method('PUT')
    <form method="POST" action="{{route('update.product')}}">
    <form class="" action="{{ route($articleDetails->id)}}}}" method="post">
        {{ csrf_field() }}
        <a class="container-fluid bg-3 text-center">
            <div>Nom du produit :  <input type="text" name ="name" value="{{ $product->name }}"> </div>
            <div class="container-fluid bg-3 text-center">
                <img src = "{{ asset ($product->image) }}" class="rounded mx-auto d-block img-borders" > <br>
                <div class="form-group">
                    Image : <input type="text" name ="image" value="{{ ($product->image) }}">
                </div>
                <div class="form-group">
                    Prix :  € <input type="text" name ="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    Description:  <input type="text" name ="description" value="{{ $product->description }}">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
                </div>
                <button type="submit" class="btn btn-primary"  id="dropdownMenuButton"  value="Update" >Submit</button>
            </div><br>
    </form>

    <form method="POST" action="{{route('update.product')}}">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="{{$articleDetails->id}}"/>
        </div>
        <button type="submit" class="btn btn-danger">SUPPRIMER</button>
    </form>
@endsection