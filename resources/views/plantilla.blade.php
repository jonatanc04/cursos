<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>
    <title>
      @yield('titulo')
    </title>
  </head>
  <body>
    @include('partials.nav')
    <div class="fecha">
      <p>{{fechaActual('d D F \of o')}}</p>
    </div>
    <div class="container">
      @yield('contenido')
    </div>
  </body>
</html>
