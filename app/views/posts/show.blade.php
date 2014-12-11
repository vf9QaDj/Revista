@extends('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section('title'){{ $post->title }}@stop
@section('content')
<h2>{{ $post->title }}</h2>
<p>{{ $post->content }}</p>
<br/>
<a href="{{ $post->id }}/edit">Editar</a>
<br/>
{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
{{--{{ Form::submit('Eliminar')}}--}}
{{ Form::button('Eliminar publicación', array('type' => 'submit', 'class' => 'btn btn-danger')) }} 
{{ Form::close() }}

@stop