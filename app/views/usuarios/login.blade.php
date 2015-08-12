<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de autenticacion con Laravel 4.2</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    {{ HTML::style('assets/css/signin.css') }}
</head>
<body>

	<div class="container">


		 {{ Form::open(['url' => 'login', 'autocomplete'=>'off', 'class' => 'form-sigin', 'role' => 'form']) }}
 
            @if(Session::has('error_message'))
               <div class="alert alert danger">
                 <button type="button" class="close" data-dismiss="alert"  aria-hidden="true" >&times;  </button>
                 {{ Session::get('error_message') }}
                </div>
            @endif
 
            <h2 class="form-signin-heading">INICIA SESION</h2>
 
            <div class="row">
                <div class="col-xs-5">
                    {{ Form::label('usuario', 'Usuario', ['class'=> 'sr-only']) }}
                    {{ Form::text('usuario', null, ['class'=>'form-control','placeholder' => 'Username', 'autofocus' => '']); }}
                </div>
            </div>

            <div class="row">
                <div class="col-xs-5">
                    {{ Form::label('password', 'Password', ['class'=> 'sr-only']) }}
                    {{ Form::password('password', ['class'=> 'form-control', 'placeholder' =>' Contrasena']); }}
             </div>
            </div>

         
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('remember', true) }} Recuerdame
                </label>
            </div>
            
           
            <div class="row">
                <div class="col-xs-5">
                    {{ Form::submit('LOGIN', ['class' => 'btn btn-primary btn-block']) }}
                  </div>
            </div>

         {{ Form::close() }}

	</div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>