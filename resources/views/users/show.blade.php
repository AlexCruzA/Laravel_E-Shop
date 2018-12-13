@extends('users.master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Users</h3> <a class="btn btn-xs btn-primary" href="{{ route('users.index') }}">Back</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group" >
        <strong>Id : </strong>
        {!! Form::text('descripcion', $user->descripcion, ['placeholder'=>'Id','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group" >
        <strong>Nombre : </strong>
        {!! Form::text('descripcion', $user->descripcion, ['placeholder'=>'Nombre','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Email : </strong>
        {!! Form::text('id_categoria', $user->id_categoria, ['placeholder'=>'Email','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Rol : </strong>
        {!! Form::text('imagen', $user->imagen, ['placeholder'=>'Rol','class'=>'form-control', 'readonly']) !!}
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-success" name="button">Buy</button>
@endsection