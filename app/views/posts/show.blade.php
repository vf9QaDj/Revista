@extends('layout')
@section('title'){{ $post->title }}@stop
@section('content')
<a href="{{ $post->id }}/edit">Editar</a>

{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
{{ Form::submit('Eliminar')}}
{{ Form::close() }}
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
@stop