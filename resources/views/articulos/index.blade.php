@extends('articulos.master')

@php 
  if( Auth::user())
  {
@endphp

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Articulos</h3>
    </div>
  </div>
 
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr align="center">
      <th>No.</th>
      <th>Descripcion</th>
      <th>Categoria</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th width="300px">Details</th>
    </tr>

    @foreach ($articulos as $articulo)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $articulo->descripcion }}</td>
        <td>{{ $articulo->id_categoria }}</td>
        <td> <center> <img src="{{URL::asset('/image/')}}/{{ $articulo->imagen  }}" alt="product Pic" height="150" width="250"></center></td>
        <td>{{ $articulo->nombre }}</td>
        <td>{{ $articulo->precio }}</td>
        <td align="center">
          <br><br>
          <a class="btn btn-success" href="{{ route('articulos.show', $articulo->id) }}">Details</a>
           @php 
              if( Auth::user())
              {
                if(Auth::user()->rol=='Administrador')
                {
            @endphp 
                <a class="btn btn-xs btn-primary" href="{{ route('articulos.edit', $articulo->id) }}">Edit</a>
                {!! Form::open(['method' => 'DELETE', 'route'=>['articulos.destroy', $articulo->id], 'style'=> 'display:inline']) !!}
                {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
                {!! Form::close() !!}
            @php  
                }
              }
            else
            {
            @endphp
               <h1>nologueado</h1>
          @php 
             }
              @endphp

        </td>
      </tr>
    @endforeach
  </table>
  {!! $articulos->links() !!}
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