@extends('plantilla')
@section('contenido')
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('usuarios') }}">alerta de usuario</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('usuarios') }}">Ver todos los Usuarios</a></li>
        <li><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo Usuario</a>
    </ul>
</nav>

<h1>Todos los usuarios</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Contraseña</td>
        </tr>
    </thead>
    <tbody>
    @foreach($usuario as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->usuario }}</td>
            <td>{{ $value->password }}</td>
            
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                
                {{ Form::open(array('url' => 'usuarios/' . $value->id.'/eliminar', 'method' => 'post')) }}
                    
                    {{ Form::submit('Eliminar este usuario', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Show this User</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/editar') }}">Edit this user</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@stop