@extends('carritocompras.master')

@php 
  if( Auth::user())
  {
@endphp

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Carritocompras </h3> <a class="btn btn-xs btn-primary" href="{{ route('carritocompras.index') }}">Back</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Descripcion : </strong>
        {{ $carritocompra->descripcion }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Id Categoria : </strong>
        {{ $carritocompra->id_categoria }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Imagen : </strong>
        {{ $carritocompra->imagen }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nombre : </strong>
        {{ $carritocompra->nombre }}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Precio : </strong>
        {{ $carritocompra->precio }}
      </div>
    </div>
  </div>
@endsection

@php  
} 
  else
  {
  @endphp
    <script>
        setTimeout(function(){location.href="{{ route('home') }}"} , 1);
    </script>
  @php 
  }
  @endphp