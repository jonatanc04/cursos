<nav>
  <h1>Cursos</h1>
  <a href="{{ route('inicio') }}"><p>Inicio</p></a>
    &nbsp;&nbsp;
  <a href="{{ route('cursos.index') }}"><p>Listado de cursos</p></a>
    &nbsp;&nbsp;
  @if(auth()->check())
    <a href="{{ route('cursos.create') }}"><p>Crear curso</p></a>
    &nbsp;&nbsp;
    <a href="{{ route('logout') }}"><p>Logout</p></a>
  @endif
</nav>