
@extends('planti')
@section('contenido')


<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('marcas') }}">Ver todos los modelos de esta marca</a></li>
   <!-- <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear una nueva marca</a></li> -->
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('marcas') }}">Modelos</a></li>
          <li class="active">Crear modelo</li>
    </ol>


<h1>Crear un modelo</h1>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('method' => 'POST','url' => '/modelos/crear/'.$marca->id)) }}

    <div class="form-group">
        {{ Form::label('modelo', 'Modelo') }}
        {{ Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control')) }}
    </div>

  <!-- <div class="form-group">
        {{ Form::label('Contraseña', 'Contraseña') }}  
        {{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control')) }}
    </div>-->


    {{ Form::submit('Creando una modelo!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@stop