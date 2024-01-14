@extends('plantilla')

@section('titulo', 'Listado de cursos')

@section('contenido')
  <h1>Listado de cursos</h1>
  <ul>
    @php($id = 0)
    @forelse ($cursos as $curso)
      <li><a href="{{ route('cursos.show', $id) }}">{{ $curso["nombre"] }}</a> ({{ $curso["curso"] }})</p></li>
      @php($id++)
    @empty
      <li>No se encontraron cursos</li>
    @endforelse
  </ul>
@endsection