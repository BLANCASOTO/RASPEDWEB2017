<?php
session_start();
require_once ('mysql-login.php');
//Creamos la conexión

$conexion = mysqli_connect($server, $user, $pass,$bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); 

 echo $fecha." es menor o igual a ".date(j);
?>
 
 
 
 
 
 
