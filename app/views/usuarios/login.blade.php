<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de autenticacion con Laravel 4.2</title>
</head>
<body>

	<div class="container">


		 {{ Form::open(['url' => 'login']) }}
 
            @if(Session::has('error_message'))
                {{ Session::get('error_message') }}
            @endif
 
            <h2>INICIA SESION</h2>
 
            {{ Form::label('usuario', 'Usuario') }}
            {{ Form::text('usuario'); }}
 
            {{ Form::label('contrasena', 'Contrasena') }}
            {{ Form::password('password'); }}
 
            <label>
                {{ Form::checkbox('remember', true) }} Remember me
            </label>
            
            {{ Form::submit('LOGIN', ['class' => 'btn btn-primary btn-block']) }}
    
        {{ Form::close() }}








	</div>
</body>
</html>