<!-- app/views/nerds/create.blade.php -->

@extends('planti')
@section('contenido')


<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todos los Usuarios</a></li>
    <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo Usuario</a></li>
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('usuarios') }}">Usuarios</a></li>
          <li class="active">Crear usuario</li>
    </ol>


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