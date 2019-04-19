@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Numero de control</td>
          <td>Semestre</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->nocontrol}}</td>
            <td>{{$alumno->semestre}}</td>
            <td><a href="{{ route('alumnos.edit',$alumno->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('alumnos.destroy', $alumno->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div>
      <a href="/">Regresar al menu</a>
  </div>
<div>
@endsection
