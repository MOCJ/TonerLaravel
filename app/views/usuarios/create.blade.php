<!-- app/views/nerds/create.blade.php -->

@extends('plantilla')
@section('contenido')
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('usuarios') }}">Alerta de Usuario</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('usuarios') }}">Ver todos los usuarios</a></li>
        <li><a href="{{ URL::to('usuarios/crear') }}">Crear un usuario</a>
    </ul>
</nav>

<h1>Crear un usuario</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'usuarios')) }}

    <div class="form-group">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('usuario', Input::old('usuario'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('Contraseña', 'Contraseña') }}
        {{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
    </div>

   

    {{ Form::submit('Creando un usuario!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@stop