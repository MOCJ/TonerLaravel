@extends('planti')
@section('contenido')


<div class="container">

        <ul class="nav nav-pills navbar-right">
          <li role="presentation" ><a href="{{ URL::to('oficinas') }}">Ver todas las oficinas</a></li>
          <li role="presentation"><a href="{{ URL::to('oficinas/crear') }}">Crear una nueva oficina</a></li>
        </ul>

        <ol  class="breadcrumb">
          <li><a href="{{ URL::to('/') }}">Home</a></li>
          <li class="active">Oficina</li>
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

    <h1>Todas las oficinas</h1>

    @if (Session::has('message'))
    <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td>ID</td>
          <td>Oficina</td>
          <td>Ubicacion</td>
          <td>Anexo</td>
        </tr>
      </thead> 
      <tbody>
        @foreach($oficina as $value)
          <tr>
            <td>{{ $value->id}}</td>
            <td>{{ $value->nombre}}</td>
            <td>{{ $value->ubicacion}}</td>
            <td>{{ $value->anexo}}</td>
            <td>
                <!--{{Form::open(array('url' => 'oficinas/' . $value->id.'/eliminar','method'=>'post'))}}         
                    {{Form::submit('Eliminar esta oficina',array('class'=>'btn btn-warning'))}}
                {{Form::close()}}--> 
                <a class="btn btn-smal btn-warning" href="{{URL::to('oficinas/'.$value->id.'/eliminar')}}">Eliminar Oficina</a>
                <a class="btn btn-small btn-success" href="{{URL::to('oficinas/'.$value->id)}}">Ver oficina</a>
                <a class="btn btn-small btn-info" href="{{URL::to('oficinas/'.$value->id.'/editar')}}">Editar oficina</a>
            </td> 
          </tr> 
          @endforeach
      </tbody> 
    </table>  
  </div>
@stop