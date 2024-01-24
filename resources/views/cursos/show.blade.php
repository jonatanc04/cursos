@extends('plantilla')

@section('titulo', 'Ficha del curso')

@section('contenido')
  <h1>{{ $curso["nombre"] }}</h1>
  <ul>
    <li>Nombre del curso: {{ $curso["nombre"] }}</li>
    <li>Curso/s: {{ $curso["curso"] }}</li>
  </ul>
  @if (empty(auth()->user()))
    <a href="{{ route('cursos.edit', $curso['id']) }}">Editar curso</a>
  @elseif ((auth()->user()->id == $curso['id_user']) || (auth()->user()->rol === 'admin')) 
    <a href="{{ route('cursos.edit', $curso['id']) }}">Editar curso</a>
  @endif
@endsection