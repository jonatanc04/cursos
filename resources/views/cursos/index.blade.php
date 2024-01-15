@extends('plantilla')

@section('titulo', 'Listado de cursos')

@section('contenido')
  <h1>Listado de cursos</h1>
  <ul>
    @forelse ($cursos as $curso)
      <li><a href="{{ route('cursos.show', $curso['id']) }}">{{ $curso["nombre"] }}</a> ({{ $curso["curso"] }}) 
        <form action="{{ route('cursos.destroy', $curso['id']) }}" method="POST">
          @method('DELETE')
          @csrf
          <button>Borrar</button>
        </form>
      </li>
    @empty
      <li>No se encontraron cursos</li>
    @endforelse
  </ul>
@endsection