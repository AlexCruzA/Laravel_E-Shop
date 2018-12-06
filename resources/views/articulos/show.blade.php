@extends('articulos.master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Articulos </h3> <a class="btn btn-xs btn-primary" href="{{ route('articulos.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Descripcion : </strong>
        {{ $articulo->descripcion }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Id Categoria : </strong>
        {{ $articulo->id_categoria }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Imagen : </strong>
        {{ $articulo->imagen }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nombre : </strong>
        {{ $articulo->nombre }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Precio : </strong>
        {{ $articulo->precio }}
      </div>
    </div>
  </div>
  
@endsection