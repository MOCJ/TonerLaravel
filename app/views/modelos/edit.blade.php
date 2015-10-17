@extends('planti')
@section('contenido')
<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todos los modelos de esta marca</a></li>
    <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo modelo</a></li>
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('marcas') }}">Modelo</a></li>
          <li class="active">Editar Modelo</li>
    </ol>



<h1>Editar {{ $modelos->modelos }}</h1>

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'modelos/'. $modelos->id.'/editar', 'method' => 'post')) }}  

   
    <div class="form-group">
        <label>Modelo: </label>
        {{ Form::text('descripcion', $modelos->descripcion, array('class' => 'form-control')) }}
    </div>

  
    {{ Form::submit('Editar el modelo!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
@stop