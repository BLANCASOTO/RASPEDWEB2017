<?php
require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//solicitamos las variables
$contrasena_ing = $_REQUEST['contrasena'];

//encriptar contrasena
$contrasena_ing = md5($contrasena_ing);
$contrasena_db = "null";

//generamos la consulta
$sql = "SELECT PER.contrasena
FROM personal PER, telefonos TEL, cupos CUP, horarios HOR, puestos PUE,usuarios USU
WHERE PER.fk_cupo = CUP.id_cupo and
PER.fk_telefono = TEL.id_telefono and
PER.fk_horario = HOR.id_horario and
PER.fk_puesto = PUE.id_puesto and
PER.fk_usuario = USU.id_usuario and
concat(TEL.fk_lada,TEL.telefono) = '$telefono'";

mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
if(!$result = mysqli_query($conexion, $sql)) die();

while($row = mysqli_fetch_array($result)) { 
    $contrasena_db=$row['contrasena'];
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
echo $contrasena_db . ", " . $contrasena_ing;    
?>
