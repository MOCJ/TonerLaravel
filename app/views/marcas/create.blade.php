
@extends('planti')
@section('contenido')


<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('marcas') }}">Ver todas las marcas</a></li>
   <!-- <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear una nueva marca</a></li> -->
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('marcas') }}">Marca</a></li>
          <li class="active">Crear marca</li>
    </ol>


<h1>Crear una marca</h1>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'marcas')) }}

    <div class="form-group">
        {{ Form::label('marca', 'Marca') }}
        {{ Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control')) }}
    </div>

  <!-- <div class="form-group">
        {{ Form::label('Contraseña', 'Contraseña') }}  
        {{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control')) }}
    </div>-->


    {{ Form::submit('Creando una marca!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@stop