<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>(-title-layout-)</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://transparencia.utem.cl/wp-content/themes/transparenciautem/favicon.ico">
    {{ HTML::style('css/bootstrap.min.css'); }}
  </head>
  <body>
  	 <h2>(-Header-layout-)</h2>
     <a href="logout">Cerrar sesión.</a><br />
      @yield('content')
      <hr />
      (-Footer-layout-) layout.blade.php - proyecto_en_blanco: Copyright 2013 - Todos los... reservados.
  </body>
</html>