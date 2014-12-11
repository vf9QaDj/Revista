@extends ('layout')
{{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
@section ('title') Lista de Usuarios @stop
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

  <h1>Lista de usuarios</h1>

  <p>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
    <!--<a href="{{ route('admin.posts.index') }}" class="btn btn-info">Administrar publicaciones</a>-->
  </p>
  
    <table class="table table-striped" style="width: 900px">
    <tr>
        <th>Nombre de usuario</th>
        <th>Nombre completo</th>
        <th>Correo electr&oacute;nico</th>
        <th>Acciones</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info">
              Ver
          </a>
          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
            Editar
          </a>
          <a href="#" data-id="{{ $user->id }}" class="btn btn-danger btn-delete">
              Eliminar
          </a>
        </td>
    </tr>
    @endforeach
  </table>
  
  {{--Indice de paginas " < 1 2 3 > "--}}
  {{ $users->links() }}

  {{ Form::open(array('route' => array('admin.users.destroy', 'USER_ID'), 'method' => 'DELETE', 'role' => 'form', 'id' => 'form-delete')) }}
  {{ Form::close() }}

@stop