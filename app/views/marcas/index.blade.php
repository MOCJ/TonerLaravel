@extends('planti')
@section('contenido')

<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todas las marcas</a></li>
          <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nueva marca</a></li>
        </ul>

        <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Marca</li>
        </ol>

    <!--********busqueda de usuarios por nombres***********-->

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
        @foreach($usuario as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->marca }}</td>
                <td>{{ $value->modelo }}</td> <!--Es clave foranea -->
                
                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    
                    {{ Form::open(array('url' => 'usuarios/' . $value->id.'/eliminar', 'method' => 'post')) }}
                        
                        {{ Form::submit('Eliminar usuario', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}


                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('usuarios/' . $value->id) }}">Ver Usuario</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('usuarios/' . $value->id . '/editar') }}">Editar Usuario</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@stop