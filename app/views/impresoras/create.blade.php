
@extends('planti')
@section('contenido')


<div class="container">


<ul class="nav nav-pills navbar-right">
      
    <li role="presentation" ><a href="{{ URL::to('impresoras') }}">Ver todos los impresoras</a></li>
    <li role="presentation"><a href="{{ URL::to('impresoras/crear') }}">Crear una nueva impresora</a></li> 
      
</ul>
  <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('marcas') }}">Impresora</a></li>
          <li class="active">Crear impresora</li>
    </ol>


<h1>Crear una impresora</h1>


<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'impresoras/crear')) }}

   <!-- <div class="form-group">
        {{ Form::label('marca', 'Marca') }}
        {{ Form::text('descripcion', Input::old('descripcion'), array('class' => 'form-control')) }}
    </div>-->

  <!-- <div class="form-group">
        {{ Form::label('Contraseña', 'Contraseña') }}  
        {{ Form::text('modelo', Input::old('modelo'), array('class' => 'form-control')) }}
    </div>-->

    <!--************COMBOBOX********************-->

      <div class="form-group">
        <label class="col-xs-3 control-label">Oficina</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Choose a size</option>
            </select>
        </div>
    </div><br><br><br>

    <div class="form-group">
        <label class="col-xs-3 control-label">Marca</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Choose a size</option>
            </select>
        </div>
    </div><br><br>

    <div class="form-group">
        <label class="col-xs-3 control-label">Modelo</label>
        <div class="col-xs-5 selectContainer">
            <select class="form-control" name="size">
                <option value="">Choose a size</option>
            </select>
        </div>
    </div><br><br>

    <div class="form-group">
        <label class="col-xs-3">Codigo Patrimonial</label>
       <div class="col-xs-4">{{ Form::text('cod_patrimonial', Input::old('cod_patrimonial'), array('class' => 'form-control')) }}</div> 
    </div><br><br>


    <div class="form-group">
        <label class="col-xs-3">Descripcion</label>
        <div class="col-xs-4">{{ Form::textarea('descripcion', Input::old('descripcion'), array('class' => 'form-control')) }}</div>
    </div><br><br><br><br><br><br><br><br><br><br>



    <!--*****************************************-->

    <div class="row-5">
        <div class="form-group">{{ Form::submit('Crear!', array('class' => 'btn btn-primary')) }}</div>
    </div>
    <br><br><br><br><br><br><br>


{{ Form::close() }}

</div>

@stop