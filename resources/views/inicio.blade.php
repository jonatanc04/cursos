@extends('plantilla')

@section('titulo', 'Inicio')

@section('contenido')
  <h1>Página de inicio</h1>
  @if(auth()->check())
    <p>Bienvenido/a {{ auth()->user()->login }}</p>
    <p><a href="{{ route('cursos.index') }}">Listado de cursos</a></p>
  @else
    <p>Por favor, inicia sesión para acceder a esta página.</p>
  @endif
@endsection