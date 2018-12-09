@extends('carritocompras.master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Carrito de compras</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{ route('carritocompras.create') }}">Create New carritocompra</a>
      </div>
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
      <th>Id Categoria</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Cantidad</th>
      <th width="300px">Actions</th>
    </tr>

    @foreach ($carritocompras as $carritocompra)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $carritocompra->descripcion }}</td>
        <td>{{ $carritocompra->id_categoria }}</td>
        <td>{{ $carritocompra->imagen }}</td>
        <td>{{ $carritocompra->nombre }}</td>
        <td>{{ $carritocompra->precio }}</td>
        <td>{{ $carritocompra->cantidad }}</td>
        <td>
          <?php $sum = (int) "$carritocompra->precio" ?>
          <?php $sum *= $carritocompra->cantidad ?>

           <div class="alert alert-danger">
            <center><strong>Total: </strong> ${{ $sum }}</center>
          </div>

          {!! Form::open(['method' => 'DELETE', 'route'=>['carritocompras.destroy', $carritocompra->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Pay',['class'=> 'btn btn-success']) !!}
          {!! Form::close() !!}

          {!! Form::open(['method' => 'DELETE', 'route'=>['carritocompras.destroy', $carritocompra->id], 'style'=> 'display:inline']) !!}
          {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $carritocompras->links() !!}
@endsection