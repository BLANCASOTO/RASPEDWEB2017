<?php
session_start();
require_once ('mysql-login.php');
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); 

<!--
$fecha = $_SESSION['fecha'];
$id_personal_regis = $_SESSION['id_personal_regis'];


$fecha_actual = strtotime(date("d-m-Y H:i:00",)); 
 $fecha = strtotime("dd-mm-yyyy"); 
 if($fecha_actual >  
 $fecha_entrada)
 
 {
 echo "La fecha entrada ya ha pasado"; 
 } 
 else
 {
 echo "Aun falta algun tiempo";
 }
 -->
 
 
 
 
 
 
