@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-5 py-5 d-flex align-items-center">
                    <div>
                        <h1 class="text-white">Simple y fácil de vender y comprar un planeta</h1>
                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut qui alias harum in, hic tempore error nobis dolore nam consequatur, 
                        incidunt asperiores optio natus quas aspernatur, exercitationem fuga quasi? Tempora.</p>
                        <div class="my-5">
                            <button type="button" class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#createTienda">
                                Crear una tienda
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <img src="{{ asset('/img/universe.gif') }}" class="img-fluid planet-dashboard" >
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($stores as $store)
                <div class="col-md-4">
                    <a href="/store/{{$store->id}}">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top store-image--list" src="{{ $store->img}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$store->name}}</h5>
                                <p class="card-text">{{$store->description}}</p>
                                <p class="card-text">Disponible: {{$store->product_count}} productos</p>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="modal fade" id="createTienda" tabindex="-1"aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5">Crear una Tienda</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="create-store" method="post" action="{{url('api/create_store')}}">
                    @csrf
                    <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea name="description" class="form-control" required=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-dark mt-4">CREAR TIENDA</button>
                </form>
            </div>
          </div>
        </div>
    </div>
@endsection