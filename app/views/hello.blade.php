<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	{{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/jumbotron-narrow.css')}}
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			padding: 0;
			font-family:'Lato', sans-serif;
			
			/*color: #999;*/
			display: flex;
			flex-direction:column;
		}

		.encabezado {
			display: flex;
			flex-direction:column;
		}

		.welcome {

			background: black;
			color: white;
			text-align: center;
			height: 90px;
		}

		a, a:visited {
			text-decoration:none;
			text-align: right;
			
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

		/*Agregados por me*/

			
		#logout {
			color: red;
		}

		.footer {
				background: steelblue;
				position: fixed;
				bottom: 0px;
				width: 1500px;
				padding: 0;
				white-space: normal;
		}
  	</style>

</head>
<body>
	<div class="encabezado">
		<div class="welcome">
			<h4>MUNICIPALIDAD DISTRITAL DE ILABAYA</h4>
			<h3>Control de Toner de Equipos Inform&aacuteticos</h3>
		</div>
	
		<div class="header">
			
			<ul class="nav nav-pills">
 					<li><a href="{{action ('UserController@index')}}">Usuarios</a></li>
					<li><a href="#">Oficina</a></li>
					
					<li role="presentation" class="dropdown">
					   	<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					      Equipos <span class="caret"></span></a>
					    <ul class="dropdown-menu">
					      ...
					    </ul>
					 </li>
					<li><a href="#">Consultas</a></li> 
					 <li><a href="#">Ayuda</a></li>

				</ul>

		</div>
	</div>
		
	<a id="logout" href="{{ action('AuthController@logout') }}"><b>Salir x</b></a>
	<div class="espacio">

		
		<!--{{ HTML::image('img/logo.png', "Imagen no encontrada", array('id' => 'logo', 'title' => 'logo')) }}-->

	</div>
	<div class="footer">
		<h5>Unidad de Tecnologias de la Informacion y Comunicaciones</h5>
		<p>&copy; Felina 2015 - Mariella Condori Joaquin</p>
		<h5>Derechos Reservados</h5>
	</div>
	
</body>
</html>
