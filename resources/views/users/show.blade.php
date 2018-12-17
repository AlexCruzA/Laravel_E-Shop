@extends('users.master')
@php
if( Auth::user())
{
@endphp
  @section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="pull-left">
          <h3>Show Users</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group" >
          <strong>Id : </strong>
          {!! Form::text('id', $user->id, ['placeholder'=>'Id','class'=>'form-control', 'readonly']) !!}
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group" >
          <strong>Nombre : </strong>
          {!! Form::text('name', $user->name, ['placeholder'=>'Nombre','class'=>'form-control', 'readonly']) !!}
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <strong>Email : </strong>
          {!! Form::text('email', $user->email, ['placeholder'=>'Email','class'=>'form-control', 'readonly']) !!}
        </div>
      </div>
      <div class="col-xs-12">
        <div class="form-group">
          <strong>Rol : </strong>
          {!! Form::text('rol', $user->rol, ['placeholder'=>'Rol','class'=>'form-control', 'readonly']) !!}
        </div>
      </div>
    </div>
    <a class="btn btn-xs btn-primary" href="{{ route('users.index') }}">Back</a>
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