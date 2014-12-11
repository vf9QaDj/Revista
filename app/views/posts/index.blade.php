@extends('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section('saludo')
 <a>Bienvenido  {{ Auth::user()->name; }}</a>
  </li><li class="item_text_20A">
 <a href="logout">Cerrar sesión</a>
@stop
@section('search')
	@include('posts/partials/postfinder')
@stop
@section('content')

	<h1>Publicaciones</h1>
	<br/>
	<a href="posts/create" class="btn btn-primary">Crear una publicacion</a>
	@if (Auth::user()->role_id == 3)
		@section('boton1')
		<a href="{{ route('admin.users.index') }}">Administrar usuarios</a>
		@stop
		@section('boton2')
  		<a href="{{ route('admin.users.index') }}">Administrar usuarios</a>
  		@stop
	@endif
	{{--<a href="posts/create">Agregar</a>--}}
	<br/>

	<ul>
	<hr/><br/>
	<table class="table table-striped" style="width: 900px">
    <tr>
        <th>Publicación</th>
        <th>Fecha de publicación</th>
        <th>Usuario</th>
    </tr>
	@foreach($posts as $post)
	<tr>
		<td><a href="{{ URL::to('admin/posts/' . $post->id) }}">{{ $post->title }}</a></td>
		 <td> --/--/-- </td> 
		 <td> --- </td>
	</tr>
	@endforeach
	</table>
	{{--Indice de paginas " < 1 2 3 > "--}}
	{{ $posts->links() }}
	</ul>
@stop