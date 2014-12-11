@extends('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section('title'){{ $post->title }}@stop
@section('content')
<h1>Edición</h1>
<br/>
{{ Form::open(array('url' => 'posts/'. $post->id, 'method' => 'put')) }}
	{{ Form::label('Título') }}<br/>
    {{ Form::text('title', $post->title) }}<br/>
    <br/>
    {{ Form::label('Publicación') }}<br/>
    {{ Form::textArea('content', $post->content) }}<br/>
    {{--{{ Form::submit('Guardar')  }}--}}
    {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }} 
{{ Form::close() }}
@stop