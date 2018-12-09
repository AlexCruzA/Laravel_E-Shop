@extends('articulos.master')
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Descripcion : </strong>
        {!! Form::text('descripcion', $articulo->descripcion, ['placeholder'=>'Descripcion','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Id Categoria : </strong>
        {!! Form::text('id_categoria', $articulo->id_categoria, ['placeholder'=>'Id Categoria','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Imagen : </strong>
        {!! Form::text('imagen', $articulo->imagen, ['placeholder'=>'Imagen','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nombre : </strong>
        {!! Form::text('nombre', $articulo->nombre, ['placeholder'=>'Nombre','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Precio : </strong>
        {!! Form::text('precio', $articulo->precio, ['placeholder'=>'Precio','class'=>'form-control']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <a class="btn btn-xs btn-success" href="{{ route('carritocompras.index') }}">Back</a>
      <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
  </div>
@endsection