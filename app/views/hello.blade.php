@extends ('principal')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}

@section('content')

@if (Auth::user()->role_id == 3)
@section('boton1')
<a href="{{ route('admin.users.index') }}">Administrar usuarios</a>
@stop
@section('boton2')
<a href="{{ route('posts.index') }}">Administrar publicaciones</a>
@endif
@if (Auth::user()->role_id == 2)
@section('boton1')
<a href="{{ route('posts.index') }}">Mis publicaciones</a>
@stop
@endif
@stop

@section('saludo')
 <a>Bienvenido  {{ Auth::user()->name; }}</a>
  </li><li class="item_text_20A">
 <a href="logout">Cerrar sesión</a>
@stop