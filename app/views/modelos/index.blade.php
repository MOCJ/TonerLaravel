@extends('planti')
@section('contenido')

<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todas los modelos</a></li>
          <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo modelo</a></li>
        </ul>

        <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Modelo</li>
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

    <h1>Todos las marcas</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Marca</td>
                <td>Modelo</td>
            </tr>
        </thead>
        <tbody>
        @foreach($marca as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->marca }}</td>
                <td>{{ $value->modelo }}</td> <!--Es clave foranea -->
                
                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    
                    {{ Form::open(array('url' => 'marcas/' . $value->id.'/eliminar', 'method' => 'post')) }}
                        
                        {{ Form::submit('Eliminar marca', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

                    <!--<a class="btn btn-small btn-success" href="{{ URL::to('marcas/' . $value->id) }}">Ver Marca</a>-->
					<a class="btn btn-small btn-info" href="{{ URL::to('marcas/' . $value->id . '/editar') }}">Editar Marca</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@stop