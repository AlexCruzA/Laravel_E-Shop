<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Descripcion : </strong>
      {!! Form::text('descripcion', null, ['placeholder'=>'Descripcion','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('categorias.index') }}">Back</a>
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