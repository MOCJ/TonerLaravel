@extends('planti')
@section('contenido')

  

<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('/modelos') }}">Ver todas los modelos</a></li>
          <li role="presentation"><a href="{{ URL::to('/modelos/crear/'.$marca->id) }}">Crear un nuevo modelo</a></li><!--Atrapar el ID de la marca desde el controlador pasado-->

        </ul>

        <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li><a href="{{ URL::to('/marcas') }}">Marcas</a></li>
          <li class="active">Modelos</li>
        </ol>

    <!--********busqueda de modelos por nombres***********-->

    <div class="row">
      <div class="col-lg-6">
        
      </div><!-- /.col-lg-6 -->
      <div class="col-lg-6">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search name">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Buscar</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->

    <!--*******************-->

   <!-- <h1>Todos los modelos de la impresora </h1>-->

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Modelo</td>
                
            </tr>
        </thead>
        <tbody>

         @foreach($modelos as $value)
            <tr>

                <td>{{ $value->id }}</td>
                <td>{{ $value->descripcion }}</td> 
               <!-- <td>{{ $value->brand_id }}</td>--><!--Es clave foranea -->
                <td>
                    {{ Form::open(array('url' => 'modelos/' . $value->id.'/eliminar', 'method' => 'post')) }}
                       {{ Form::submit('Eliminar modelo', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}
				      	    <a class="btn btn-small btn-info" href="{{ URL::to('modelos/' . $value->id . '/editar') }}">Editar modelo</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@stop