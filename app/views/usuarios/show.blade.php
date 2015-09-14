@extends('planti')
@section('contenido')
<div class="container">

<!--<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('usuarios') }}">Alerta Usuario</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('usuarios') }}">Ver todos los Usuarios</a></li>
        <li><a href="{{ URL::to('usuarios/crear') }}">Creando un Usuario</a>
    </ul>
</nav>-->
<ul class="nav nav-pills">
      
    <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todos los Usuarios</a></li>
    <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo Usuario</a></li>
      
</ul>

<h1>Showing {{ $usuarios->usuario }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $usuarios->usuario }}</h2>
        <p>
            <strong>Contraseña:</strong> {{ $usuarios->password }}<br>
           
        </p>
    </div>

</div>
@stop