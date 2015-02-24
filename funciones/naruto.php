<?php

function cnx($server,$usuario,$contra){

	$enlace =  mysql_connect($server, $usuario, $contra);
	if (!$enlace) {
	    die('No pudo conectarse: ' . mysql_error());
	}
	#echo 'Conectado satisfactoriamente';
	#mysql_close($enlace);

}

?>
