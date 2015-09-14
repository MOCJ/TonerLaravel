@extends('planti')
@section('contenido')


<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('usuarios') }}">Ver todas las oficinas</a></li>
          <li role="presentation"><a href="{{ URL::to('usuarios/crear') }}">Crear un nuevo Usuario</a></li>
        </ul>

        <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Usuario</li>
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

   

   
@stop