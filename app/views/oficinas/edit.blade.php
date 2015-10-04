@extends('planti')
@section('contenido')
<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('oficinas') }}">Ver todas las oficinas</a></li>
    <li role="presentation"><a href="{{ URL::to('oficinas/crear') }}">Crear una Oficina</a></li>
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('oficinas') }}">Oficinas</a></li>
          <li class="active">Editar oficina</li>
    </ol>



<h1>Editar {{ $oficinas->oficina }}</h1>

<!--if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'oficinas/'. $oficinas->id, 'method' => 'post')) }}  


   
    <div class="form-group">
        <!--{{ Form::label('oficina', 'Oficina') }} 
        {{ Form::text('nombre', null, array('class' => 'form-control')) }}-->
        <label>Oficina :</label>
        <input value="{{$oficinas->nombre}}" type="text" class="form-control">


    </div>
     <div class="form-group">
       <!-- {{ Form::label('ubicacion', 'Ubicacion') }}
        {{ Form::text('ubicacion', null, array('class' => 'form-control')) }}-->
        <label>Ubicacion : </label>
        <input value="{{$oficinas->ubicacion}}" type="text" class="form-control">
    </div>
     <div class="form-group">
        <!--{{ Form::label('Anexo', 'Anexo') }}
        {{ Form::text('anexo', null, array('class' => 'form-control')) }}-->
        <label>Anexo : </label>
        <input value="{{$oficinas->anexo}}" type="text" class="form-control">
    </div>


   
    {{ Form::submit('Editar oficina!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}


</div>
@stop