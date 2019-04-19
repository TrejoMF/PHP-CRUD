@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Alumno
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
      <form method="post" action="{{ route('alumnos.update', $alumno->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" value={{ $alumno->nombre }} />
        </div>
        <div class="form-group">
          <label for="nocontrol">Numero de control:</label>
          <input type="text" maxlength="8" class="form-control" name="nocontrol" value={{ $alumno->nocontrol }} />
        </div>
        <div class="form-group">
          <label for="semestre">Semestre:</label>
          <input type="text" maxlength="2" class="form-control" name="semestre" value={{ $alumno->semestre }} />
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="/alumnos">Regresar</a>
      </form>
  </div>
</div>
@endsection
