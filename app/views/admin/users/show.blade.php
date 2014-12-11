@extends ('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section ('title') Usuario:{{ $user->name }} @stop

@section('saludo')
 <a>Bienvenido  {{ Auth::user()->name; }}</a>
  </li><li class="item_text_20A">
 <a href="logout">Cerrar sesión</a>
@stop

@section('boton1')
<a href="{{ route('admin.users.index') }}">Administrar usuarios</a>
@stop
@section('boton2')
<a href="{{ route('posts.index') }}">Administrar publicaciones</a>
@stop

@section ('content')

<h2>Usuario #{{ $user->id }}</h2>

<p>Nombre: {{ $user->name }}</p>
<p>Nombre de usuario: {{ $user->username }}</p>
<p>Email: {{ $user->email }}</p>
<br/>
<p>
  <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
    Editar
  </a>    
</p>
<br/>
	{{ Form::model($user, array('route' => array('admin.users.destroy', $user->id), 'method' => 'DELETE'), array('role' => 'form')) }}
    	{{ Form::submit('Eliminar usuario', array('class' => 'btn btn-danger')) }}
	{{ Form::close() }}

@stop