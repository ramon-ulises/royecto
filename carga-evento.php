<?php
include('conexion.php');
$id = $_GET['id'];   
mysql_query ("SET NAMES 'utf8'");
$consulta = mysql_query("SELECT * FROM evento WHERE evento_id ='".$id."' "); 
while($row = mysql_fetch_row($consulta)) {

$fecha = date("d-m-Y",strtotime($row[2]));

echo "$row[0]*$row[1]*$fecha*$row[3]*$row[4]*$row[5]";

};
?>
