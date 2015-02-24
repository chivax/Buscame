<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Directorio Comercial con rutas dinamicas desde donde estes." />
	<title>Buscame , Bienvenido empieza a buscar.</title>
	<link rel="stylesheet" href="stilo/normalize.css" />
	<link rel="stylesheet" href="stilo/estilos.css" />
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="funciones/fun.js"></script>
</head>
<body>
	<header>
		<!--<figure id="logo">
					<img src="images/name.png" />
		</figure>-->
		<h1>Buscame.in</h1>
	</header>
		<nav>
			<ul>
				
				<li><a href="#"></a>Categorias</li>
			</ul>	
		</nav>
	
	
	<section id="busqueda">
		<article id="busqart">
				<!--<label id="buscarlbl">Buscar: </label>-->
				<input type="search" name="buscar" id="buscartxt" results=5   autofocus onkeyup="buscar()" placeholder="Busca por nombre, categoria o descripcion del negocio">
				
		</article>
	</section>

	<section id="resultados">
		<article>
				<div id="rs">Resultados...</div>
		</article>	

	</section>


	<footer>
		<p>
			<strong>Powered by Hostiux y Softiux</strong>
		</p>
		<p>
			MUC 2015
		</p>
	</footer>
</body>

</html>