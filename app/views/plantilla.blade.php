<!DOCTYPE html>
<html>
	<head>
	<title>Tienda</title>
		<!-- Incluimos CSS de Bootstrap y el CSS de la plantilla que usamos con los helpers de Laravel -->
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::style('css/jumbotron-narrow.css')}}
	</head>
	<body>
		<div class="container">
			<!--<div class="header">
				<ul class="nav nav-pills pull-right">
					<li>{{HTML::link('/','Inicio')}}</li>
					<li>{{HTML::link('vendedor','Vendedores')}}</li>
					<li>{{HTML::link('producto','Productos')}}</li>
				</ul>
				<h3 class="text-muted">EQUIPOS INFORMATICOS MDI</h3>
			</div>-->
			@yield('contenido')
			<div class="footer">
				<p>&copy; Felina 2015 - Mariella Condori Joaquin - License GNU GPLv3</p>
				<p>Colaborador JALV</p>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery.js"></script>
		{{HTML::script('js/bootstrap.min.js')}}"
	</body>
</html>
