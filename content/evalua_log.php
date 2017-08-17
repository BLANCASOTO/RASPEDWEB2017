<?php
require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//solicitamos las variables
$contrasena_ing = $_REQUEST['contrasena'];
$telefono = $_REQUEST['telefono'];

//encriptar contrasena
$contrasena_ing = md5($contrasena_ing);
$contrasena_db = "null";
$cupo = "null";
$usuario = "null";

//generamos la consulta
$sql = "SELECT PER.contrasena,
concat (CUP.fk_sede, CUP.cupo) as cupo,
USU.id_usuario as usuario
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
    $cupo=$row['cupo'];
    $usuario=$row['usuario'];
}


    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

if($usuario == "1"){
    if($contrasena_db == $contrasena_ing){
        session_start();
        $_SESSION["cupo"] = $cupo;
        header("location:root.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "2"){
    if($contrasena_db == $contrasena_ing){
        session_start();
        $_SESSION["cupo"] = $cupo;
        header("location:admin.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "3"){
    if($contrasena_db == $contrasena_ing){
        session_start();
        $_SESSION["cupo"] = $cupo;
        header("location:user.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "4"){
    if($contrasena_db == $contrasena_ing){
        session_start();
        $_SESSION["cupo"] = $cupo;
        header("location:regis.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else{
    "error al validar datos";
}  
?>
