@extends('planti')
@section('contenido')
<div class="container">

    <ul class="nav nav-pills">
          
        <li role="presentation" ><a href="{{ URL::to('marcas') }}">Ver todas las marcas</a></li>
        <li role="presentation"><a href="{{ URL::to('marcas/crear') }}">Crear Marca</a></li>
          
    </ul>

    <h1>Showing {{ $marcas->marca }}</h1>

        <div class="jumbotron text-center">
            <h2>{{ $marcas->descripcion }}</h2>       
        </div>

</div>
@stop