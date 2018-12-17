{!! Form::open(['route' => 'carritocompras.store', 'method' => 'POST']) !!}

@extends('articulos.master')

@php 
  if( Auth::user())
  {
@endphp

@section('content')
@if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Articulos </h3> <a class="btn btn-xs btn-primary" href="{{ route('articulos.index') }}">Back</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group" >
        <strong>Descripcion : </strong>
        {!! Form::text('descripcion', $articulo->descripcion, ['placeholder'=>'Descripcion','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Id Categoria : </strong>
        {!! Form::text('id_categoria', $articulo->id_categoria, ['placeholder'=>'Id Categoria','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Imagen : </strong>
        {!! Form::text('imagen', $articulo->imagen, ['placeholder'=>'Imagen','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nombre : </strong>
        {!! Form::text('nombre', $articulo->nombre, ['placeholder'=>'Nombre','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Precio : </strong>
        {!! Form::text('precio', $articulo->precio, ['placeholder'=>'Precio','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-1">
      <div class="form-group">
        <strong>Cantidad : </strong>
        {!! Form::number('cantidad', $articulo->cantidad, ['placeholder'=>'Cantidad***','class'=>'form-control', 'min'=>'1', 'max'=>'100']) !!}
      </div>
    </div>
  </div>
  {!! Form::close() !!}
  <button type="submit" class="btn btn-success" name="button">Buy</button>
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