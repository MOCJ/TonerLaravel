@extends('planti')
@section('contenido')


<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('oficinas') }}">Ver todas las Oficinas</a></li>
    <li role="presentation"><a href="{{ URL::to('oficinas/crear') }}">Crear una nueva oficina</a></li>
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('oficinas') }}">Oficina</a></li>
          <li class="active">Crear oficina</li>
    </ol>


<h1>Crear una oficina</h1>

 

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'oficinas')) }}

    <div class="form-group">
        {{ Form::label('oficina', 'Oficina') }}
        {{ Form::text('nombre', Input::old('nombre'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('ubicacion', 'Ubicacion') }}
        {{ Form::text('ubicacion', Input::old('ubicacion'), array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('anexo', 'Anexo') }}
        {{ Form::text('anexo', Input::old('anexo'), array('class' => 'form-control')) }}
    </div>
 
  {{ Form::submit('Creando una oficina!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>

@stop