@extends('layout')
@section('title')Nueva publicacion@stop
@section('content')
<h1>Nueva publicacion</h1>
<br/>
{{ Form::open(array('url' => 'posts')) }}
    {{ Form::label('Título') }}<br/>
    {{ Form::text('title') }}<br />
    <br/>
    {{ Form::label('Publicación') }}<br/>
    {{ Form::textArea('content') }}<br/>
    {{ Form::submit('Guardar') }}
{{ Form::close() }}
@stop