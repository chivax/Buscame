<?php
require 'funciones/data.php';
require 'funciones/naruto.php';

if($_POST['obj']==0){

$txt= $_POST['bt'];
#echo "Buscando...<br />";

cnx($server,$usuario,$contra);

$sn="select * from buscame_dc.negocios where nombre like '%".$txt."%' or categoria like '%".$txt."%' or descripcion like '%".$txt."%';";
$rs=mysql_query($sn);

echo "<table><tr><th>Nombre del Negocio</th><th>Categoria</th></tr>";

while($fila=mysql_fetch_array($rs)){
echo "<tr><td>".$fila['nombre']."</td><td>".$fila['categoria']."</td></tr>";
}

echo "</tr></table>";

}
?>