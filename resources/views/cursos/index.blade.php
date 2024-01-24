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
          @if (empty(auth()->user()))
            <button>Borrar</button>
          @elseif ((auth()->user()->id === $curso['id_user']) || (auth()->user()->rol === 'admin')) 
            <button>Borrar</button>
          @endif
        </form>
      </li>
    @empty
      <li>No se encontraron cursos</li>
    @endforelse
  </ul>
@endsection