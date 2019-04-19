@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Registrar alumno
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('alumnos.store') }}">
          <div class="form-group">
              @csrf
              <label for="nombre">Nombre del alumno:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group">
              <label for="nocontrol">Numero de control:</label>
              <input type="text" maxlength="8" class="form-control" name="nocontrol"/>
          </div>
          <div class="form-group">
              <label for="semestre">Semestre:</label>
              <input type="text" maxlength="1" class="form-control" name="semestre"/>
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
          <a href="/">Regresar al menu</a>
      </form>
  </div>
</div>
@endsection
