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
    </tr>

    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->rol }}</td>
      </tr>
    @endforeach
  </table>
  {!! $users->links() !!}
@endsection