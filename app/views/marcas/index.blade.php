@extends('planti')
@section('contenido')

<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('marcas') }}">Ver todas las marcas</a></li>
          <li role="presentation"><a href="{{ URL::to('marcas/crear') }}">Crear un nueva marca</a></li>
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

    <h1>Todas las marcas</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Marca</td>
            </tr>
        </thead>
        <tbody>
        @foreach($marca as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->descripcion }}</td>
                <td>
				   <a class="btn btn-small btn-success"   href="{{URL::to('marcas/'.$value->id.'/modelos')}}">Ver Modelos</a>
                   <a class="btn btn-small btn-info" href="{{ URL::to('marcas/' . $value->id . '/editar') }}">Editar</a>
                   {{Form::open(array('url'=>'marcas/'.$value->id.'/eliminar','method'=>'post'))}}
                        {{Form::submit('Eliminar',array('class'=>'btn btn-warning'))}}
                   {{Form::close()}}
                   
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@stop