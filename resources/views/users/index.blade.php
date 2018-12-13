@extends('users.master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Usuarios</h3>
    </div>
  </div>
 
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr align="center">
      <th>Id</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Rol</th>
      <th>Actions</th>
    </tr>

    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->rol }}</td>
        <td align="center">
          <a class="btn btn-success" href="{{ route('users.show', $user->id) }}">Details</a>

          @if( Auth::user()->rol == 'Administrador' )
            <a class="btn btn-xs btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id], 'style'=> 'display:inline']) !!}
            {!! Form::submit('Delete',['class'=> 'btn btn-xs btn-danger']) !!}
            {!! Form::close() !!}
          @endif

        </td>
      </tr>
    @endforeach
  </table>
  {!! $users->links() !!}
@endsection