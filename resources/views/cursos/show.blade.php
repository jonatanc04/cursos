@extends('plantilla')

@section('titulo', 'Ficha del curso')

@section('contenido')
  <h1>{{ $curso["nombre"] }}</h1>
  <ul>
    <li>Nombre del curso: {{ $curso["nombre"] }}</li>
    <li>Curso/s: {{ $curso["curso"] }}</li>
  </ul>

  <a href="{{ route('cursos.edit', $curso['id']) }}">Editar curso</a>
@endsection