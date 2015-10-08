@extends('planti')
@section('contenido')
<div class="container">

  <!--PANEL CABEZERA-->
    <ul class="nav nav-pills navbar-right">
        <li role="presentation" ><a href="{{ URL::to('oficinas') }}">Ver todas las oficinas</a></li>
        <li role="presentation"><a href="{{ URL::to('oficinas/crear') }}">Crear una Oficina</a></li>
   </ul>
   <ol  class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>
        <li><a href="{{ URL::to('oficinas') }}">Oficinas</a></li>
        <li class="active">Editar oficina</li>
    </ol>

  <!-- PANEL EDITAR-->
    <div class="panel panel-success">
        <div class="panel-heading">
             <h1>Editar {{ $oficinas->oficina }}</h1>
        </div>
        {{ HTML::ul($errors->all()) }}
        <div class="panel-body">
             
            {{ Form::open(array('url' => 'oficinas/'. $oficinas->id.'/editar', 'method' => 'post')) }} 
                    <div class="form-group">
                        
                       <!-- <label>Oficina :</label>
                        <input value="{{$oficinas->nombre}}" type="text" class="form-control" required>-->
                        <label>Oficina :</label>
                        {{Form::text('nombre',$oficinas->nombre,array('class'=>'form-control'))}}
                    </div>
                     <div class="form-group">
                        {{Form::label('Ubicacion','Ubicacion')}}
                        {{Form::text('ubicacion',$oficinas->ubicacion,array('class'=>'form-control'))}}
                        <!--<label>Ubicacion : </label>
                        <input value="{{$oficinas->ubicacion}}" type="text" class="form-control"required>-->
                    </div>
                     <div class="form-group">
                       {{Form::label('Anexo','Anexo')}}
                        {{Form::text('anexo',$oficinas->anexo,array('class'=>'form-control'))}}
                       <!-- <label>Anexo : </label>
                        <input value="{{$oficinas->anexo}}" type="text" class="form-control" required>-->
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-primary">
              {{ Form::close() }}
        </div>
    
    </div>
</div>
@stop
