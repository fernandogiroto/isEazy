@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row pt-5">
            <div class="col-5 py-5 d-flex align-items-center">
                <div>
                    <h1 class="text-white">{{$store->name}}</h1>
                    <p class="text-white">{{$store->description}}</p>
                    <div class="my-5">
                        <button type="button" class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#editarTienda">Editar Tienda</button>
                        <button type="button" class="btn btn-iseazy me-2" data-bs-toggle="modal" data-bs-target="#deletarTienda">Borrar Tienda</button>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <img src="{{ $store->img }}" class="img-fluid planet-dashboard rounded">
            </div>
        </div>
    </div>
</section>
<div class="container">
    <table class="table table-striped  caption-top shadow bg-white" id="products-table">
        <caption class="text-white">Lista de Productos ({{$store->product_count}} productos)</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descrición</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{substr($product->description,0,100)}}</td>
                    <td>{{$product->stock}}</td>
                    <td><a href="{{ route('buyProduct', $product->id) }}" class="btn btn-sm btn-dark me-2 {{ $product->stock ==  0 ? 'disabled' : ''  }}"> Comprar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- EDIT STORE --}}
    <div class="modal fade" id="editarTienda" tabindex="-1"aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5">Editar Tienda ( {{$store->name}} )</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('updateStore', $store->id) }}">
                    @method('PUT')
                    <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" required="" value="{{$store->name}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Descripción</label>
                    <textarea name="description" class="form-control" required="" rows="5">{{$store->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-dark mt-4">ATUALIZAR TIENDA</button>
                </form>
            </div>
          </div>
        </div>
    </div>
        {{-- DELETE STORE --}}
        <div class="modal fade" id="deletarTienda" tabindex="-1"aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Borrar Tienda ( {{$store->name}} )</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('deleteStore', $store->id) }}" method="post">
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Borrar</button>
                      </form>
                </div>
              </div>
            </div>
        </div>
</div>
@endsection