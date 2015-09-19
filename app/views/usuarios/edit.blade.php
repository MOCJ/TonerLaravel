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
          <li class="active">Editar usuario</li>
    </ol>



<h1>Editar {{ $usuarios->usuario }}</h1>

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'usuarios/'. $usuarios->id, 'method' => 'post')) }}  


   
    <div class="form-group">
        {{ Form::label('usuario', 'Usuario') }}
        {{ Form::text('usuario', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', null, array('class' => 'form-control')) }}
    </div> 
   
    {{ Form::submit('Editar el Usuario!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
@stop