@extends('planti')
@section('contenido')
<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todos las marcas</a></li>
    <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear una nueva marca</a></li>
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('marcas') }}">Marca</a></li>
          <li class="active">Editar Marca</li>
    </ol>



<h1>Editar {{ $marcas->marca }}</h1>

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'marcas/'. $marcas->id.'/editar', 'method' => 'post')) }}  


   
    <div class="form-group">
        <label>Marca: </label>
        {{ Form::text('descripcion', $marcas->descripcion, array('class' => 'form-control')) }}
    </div>

  
    {{ Form::submit('Editar la Marca!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
@stop