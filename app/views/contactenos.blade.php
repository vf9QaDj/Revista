@extends('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section('title'){{ $post->title }}@stop
@section('content')
<h1>Contáctenos</h1>
<br/>
{{ Form::open(array('url' => 'posts/'. $post->id, 'method' => 'put')) }}
	{{ Form::label('Dirección de e-mail') }}<br/>
    {{ Form::text('email') }}<br/>
    <br/>
	{{ Form::label('Asunto') }}<br/>
    {{ Form::text('Asunto') }}<br/>
    <br/>
    {{ Form::label('Mensaje') }}<br/>
    {{ Form::textArea('content') }}<br/>
    {{--{{ Form::submit('Guardar')  }}--}}
    {{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-primary')) }} 
{{ Form::close() }}
@stop