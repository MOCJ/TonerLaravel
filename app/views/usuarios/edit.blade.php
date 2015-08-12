<!DOCTYPE html>
<html>
<head>
    <title>Vista para editar los usuarios</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('usuarios') }}">Alerta Usuario</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('usuarios') }}">Ver todos los usuarios</a></li>
        <li><a href="{{ URL::to('usuarios/crear') }}">Crear un usuario</a>
    </ul>
</nav>

<h1>Editar {{ $usuarios->usuario }}</h1>

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'usuarios/'. $usuarios->id, 'method' => 'post')) }}  


   
    <div class="form-group">
        {{ Form::label('usuario', 'Usuario') }}
        {{ Form::text('usuario', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('contrasena', 'Contrasena') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div>

   

    {{ Form::submit('Editar el Usuario!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>