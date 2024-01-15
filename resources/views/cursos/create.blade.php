@extends('plantilla')

@section('titulo', 'Crear curso')

@section('contenido')
  <h1>{{ $mensaje }}</h1>

  <form action="{{ route('cursos.store') }}" method="POST">
    @csrf
    <label>Nombre</label>
    <input type="text" name="nombre">
    <label>Curso</label>
    <input type="text" name="curso">

    <input type="submit" name="enviar" value="Enviar">
  </form>

@endsection