@extends('Categorias.master')
@php
if( Auth::user())
{
@endphp
  @section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Show Categorias </h3> <a class="btn btn-xs btn-primary" href="{{ route('categorias.index') }}">Back</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Descripcion : </strong>
        {{ $categoria->descripcion }}
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