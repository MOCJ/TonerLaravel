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
			height: 80px;
			
		}
		.footer {
				background: gray;
				position: fixed;
				bottom: 0px;
				width: 1500px;
				padding: 0;
				font-size: 13px;
				line-height: 0;


		}
	</style>
</head>
<body>
	
		<div class="welcome">
			<h4>MUNICIPALIDAD DISTRITAL DE ILABAYA</h4>
			<h4>Control de Toner de Equipos Inform&aacuteticos</h4>

		</div>
		@yield('contenido')
		<div class="footer">
			
			<p >Unidad de Tecnologias de la Informacion y Comunicaciones</p>
			<p>&copy; Felina 2015 - Mariella Condori Joaquin</p>
			<p>Derechos Reservados</p>

		</div>
		{{HTML::script('js/bootstrap.min.js')}}
</body>
</html>

