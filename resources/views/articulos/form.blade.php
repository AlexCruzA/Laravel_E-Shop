<?php
use App\Categoria;
$list = Categoria::all();
?>
<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Descripcion : </strong>
      {!! Form::text('descripcion', null, ['placeholder'=>'Descripcion','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Categoria : </strong>
      <select name="id_categoria">
        @foreach($list as $category)
          <option value="{{$category->descripcion}}">{{$category->descripcion}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Imagen : </strong>
      {!! Form::file('imagen', null, ['placeholder'=>'Imagen', 'name'=>'imagen','class'=>'form-control', 'size'=>'20']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Nombre : </strong>
      {!! Form::text('nombre', null, ['placeholder'=>'Nombre','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Precio : </strong>
      {!! Form::text('precio', null, ['placeholder'=>'Precio','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('articulos.index') }}">Back</a>
    @if( Auth::user()->rol == 'Administrador' )
      <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    @endif
    @if( Auth::user()->rol == 'Comprador' )
      <div class="alert alert-danger">
        <center><strong>Ups!</strong> No tienes acceso a esta función</center>
      </div>
    @endif
  </div>
</div>