<!DOCTYPE html>
<html>
<head>
	<title>Encabezado</title>
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/jumbotron.narrow.css')}}
	<style>
		.body {
			margin: 0;
			padding:0;
			display: flex;
			flex-direction:column;
			font-family:'Lato', sans-serif;
			
		}
		.welcome {
			background:black;
			text-align:center;
			display: flex;
			flex-direction:column;
			color: white;
			height: 90px;
			
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
	
		<div class="welcome">
			<h4>MUNICIPALIDAD DISTRITAL DE ILABAYA</h4>
			<h3>Control de Toner de Equipos Inform&aacuteticos</h3>

		</div>
		@yield('contenido')
		<div class="footer">
			
			<h5>Unidad de Tecnologias de la Informacion y Comunicaciones</h5>
			<p>&copy; Felina 2015 - Mariella Condori Joaquin</p>
			<h5>Derechos Reservados</h5>

		</div>
		{{HTML::script('js/bootstrap.min.js')}}
</body>
</html>

