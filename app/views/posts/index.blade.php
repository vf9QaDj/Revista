@extends('admin/layout')

@section('content')
<h1>Publicaciones</h1>
<a href="posts/create" class="btn btn-primary">Crear una publicacion</a>
<a href="{{ route('admin.users.index') }}" class="btn btn-info">Administrar usuarios</a>

{{--<a href="posts/create">Agregar</a>--}}
<br/><br/>
@include('posts/partials/postfinder')
<ul>
	<hr/><br/>
	@foreach($posts as $post)
	<li>
		<!-- <a href="posts/{{ $post->id }}">{{ $post->title }}</a> -->

		<a href="{{ URL::to('admin/posts/' . $post->id) }}">{{ $post->title }}</a>

	</li>
	@endforeach
	
</ul>
@stop