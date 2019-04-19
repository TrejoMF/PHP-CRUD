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
              <label for="name">Nombre del alumno:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>
          <div class="form-group">
              <label for="price">Numero de control:</label>
              <input type="text" maxlength="8" class="form-control" name="nocontrol"/>
          </div>
          <div class="form-group">
              <label for="quantity">Semestre:</label>
              <input type="text" maxlength="1" class="form-control" name="semestre"/>
          </div>
          <button type="submit" class="btn btn-primary">Registrar</button>
      </form>
  </div>
</div>
@endsection
