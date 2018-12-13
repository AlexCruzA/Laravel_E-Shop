<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Nombre : </strong>
      {!! Form::text('name', null, ['placeholder'=>'Nombre','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Correo : </strong>
      {!! Form::text('email', null, ['placeholder'=>'Imagen','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Rol : </strong>
      {!! Form::text('rol', null, ['placeholder'=>'Nombre','class'=>'form-control', 'disabled']) !!}
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