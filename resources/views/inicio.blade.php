@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
  <h1>Página de inicio</h1>
  <p>Bienvenido/a {{ $nombre }}</p>
  <p><a href="{{ route('cursos.index') }}">Listado de cursos</a></p>
@endsection