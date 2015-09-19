@extends('planti')
@section('contenido')
<div class="container">

    <ul class="nav nav-pills">
          
        <li role="presentation" ><a href="{{ URL::to('oficinas') }}">Ver todas las Oficinas</a></li>
        <li role="presentation"><a href="{{ URL::to('oficinas/crear') }}">Crear oficina</a></li>
          
    </ul>

    <h1>Showing {{ $oficinas->oficina }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $oficinas->nombre }}</h2>
            <h2>{{ $oficinas->ubicacion }}</h2>
            <h2>{{ $oficinas->anexo }}</h2>
          
        </div>

</div>
@stop