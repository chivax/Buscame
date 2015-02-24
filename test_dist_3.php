<?php

include'data.php';
include'naruto.php';

cnx($server,$usuario,$contra);

$sn="select * from buscame_dc.negocios where id_negocio=1;";
$rs=mysql_query($sn);

while($fila=mysql_fetch_array($rs)){
#echo "<input type='hidden' id='lat2' value='".$fila['latitud']."'>";
#echo "<input type='hidden' id='lon2' value='".$fila['longitud']."'>";
#echo "<label>".$fila['latitud']."</label>";
#echo "<label>".$fila['longitud']."</label>";
$nombre=$fila['nombre'];
$lat2=$fila['latitud'];
$lon2=$fila['longitud'];
}

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="rukia.js"></script>
		<title>Test de Distancia Dinamica</title>
	</head>
	<body onload="calc_dist()">
		<input type='hidden' id='lat2' value='<?php echo $lat2; ?>'>
		<input type='hidden' id='lon2' value='<?php echo $lon2; ?>'>
		<h1> <?php echo $nombre; ?> </h1>
		<div id ="rs"></div>
	</body>
	<footer></footer>
</html>
