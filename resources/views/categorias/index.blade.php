
@extends('categorias.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Categorias</h3>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>No.</th>
      <th>Descripcion</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($categorias as $categoria)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $categoria->descripcion }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('categorias.show', $categoria->id) }}">Show</a>

          @if( Auth::user()->rol == 'Administrador' )
            <a class="btn btn-xs btn-primary" href="{{ route('categorias.edit', $categoria->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route'=>['categorias.destroy', $categoria->id], 'style'=> 'display:inline']) !!}
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}
          @endif
        </td>
      </tr>
    @endforeach
  </table>
  {!! $categorias->links() !!}
@endsection