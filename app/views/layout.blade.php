<html lang="en">
  <head>
    <title>@yield('title', 'Revista Digital')</title>

    <meta charset="utf-8">
    <title>(-title-layout-)</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://transparencia.utem.cl/wp-content/themes/transparenciautem/favicon.ico">
    {{ HTML::style('css/bootstrap.min.css'); }}
  </head>
  <body>
  	 <h2>(-Header-layout-)</h2>
     <a href="{{ url('admin/logout') }}">Cerrar sesión.</a><br />

      @yield('content')
      <a href="{{ route('admin.users.index') }}" class="btn btn-info">Administrar usuarios</a>
      <hr />
      (-Footer-layout-) layout.blade.php - proyecto_en_blanco: Copyright 2013 - Todos los... reservados.
  </body>
</html>