@extends('plantilla')

@section('titulo', 'Editar curso')

@section('contenido')
  <h1>{{ $mensaje }}</h1>
  <h2>Editando el curso: {{ $curso['nombre'] }}</h2>

  <form action="{{ route('cursos.update', $curso['id']) }}" method="POST">
    @method('PUT')
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre" placeholder="{{ $curso['nombre'] }}">
    <label>Curso</label>
    <input type="text" name="curso" placeholder="{{ $curso['curso'] }}">

    <input type="submit" name="enviar" value="Enviar">
  </form>
  
@endsection