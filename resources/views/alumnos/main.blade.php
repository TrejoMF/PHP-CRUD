@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Pagina de inicio
  </div>
  <div class="card-body">
      <a href="{{ route('alumnos.index')}}">Ver lista de alumnos</a><br>
      <a href="{{ route('alumnos.create')}}">Registrar nuevo alumno</a>
  </div>
</div>
@endsection
