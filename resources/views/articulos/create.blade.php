@extends('articulos.master')
@php
if( Auth::user())
{
@endphp
  @section('content')
    <div class="row">
      <div class="col-lg-12">
        <div class="pull-left">
          <h3>Add New Articulo</h3>
        </div>
      </div>
    </div>
    @if(count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whooops!! </strong> There were some problems with your input.<br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    {!! Form::open(['route' => 'articulos.store', 'method' => 'POST']) !!}
    @include('articulos.form')
    {!! Form::close() !!}
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