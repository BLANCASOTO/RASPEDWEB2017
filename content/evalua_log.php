<?php
require_once ('mysql-login.php');

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//solicitamos las variables
$telefono = $_REQUEST['telefono'];
$contrasena_ing = $_REQUEST['contrasena'];
$telefono = $_REQUEST['telefono'];

//encriptar contrasena
$contrasena_ing = md5($contrasena_ing);
$contrasena_db = "null";

$id_personal = "null";
$sede = "null";
$cupo = "null";
$nombre_personal = "null";
$apellido_p = "null";
$apellido_m = "null";
$lada = "null";
$contrasena = "null";
$horario = "null";
$puesto = "null";
$usuario = "null";

//generamos la consulta
$sql = "SELECT PER.id_personal,
CUP.fk_sede as sede,
CUP.cupo as cupo,
PER.nombre_personal,
PER.apellido_p,
PER.apellido_m,
TEL.fk_lada as lada,
TEL.telefono,
PER.contrasena,
HOR.hr_nombre as horario,
PUE.nombre_puesto as puesto,
USU.id_usuario
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
$contrasena_db = $row['contrasena'];
    $id_personal = $row['id_personal'];
$sede = $row['sede'];
$cupo = $row['cupo'];
$nombre_personal = $row['nombre_personal'];
$apellido_p = $row['apellido_p'];
$apellido_m = $row['apellido_m'];
$lada = $row['lada'];
$telefono = $row['telefono'];
$contrasena = $row['contrasena'];
$horario = $row['horario'];
$puesto = $row['puesto'];
$usuario = $row['id_usuario'];
}
  
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

if($usuario == "1"){
    if($contrasena_db == $contrasena_ing){
        session_start();
$_SESSION['id_personal_admin'] = $id_personal;
$_SESSION['sede_admin'] = $sede;
$_SESSION['cupo_admin'] = $cupo;
$_SESSION['nombre_personal_admin'] = $nombre_personal;
$_SESSION['apellido_p_admin_admin'] = $apellido_p;
$_SESSION['apellido_m_admin'] = $apellido_m;
$_SESSION['lada_admin'] = $lada;
$_SESSION['telefono_admin'] = $telefono;
$_SESSION['contrasena_admin'] = $contrasena;
$_SESSION['horario_admin'] = $horario;
$_SESSION['puesto_admin'] = $puesto;
$_SESSION['usuario_admin'] = $usuario;
        header("location:root.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "2"){
    if($contrasena_db == $contrasena_ing){
        session_start();
$_SESSION['id_personal_admin'] = $id_personal;
$_SESSION['sede_admin'] = $sede;
$_SESSION['cupo_admin'] = $cupo;
$_SESSION['nombre_personal_admin'] = $nombre_personal;
$_SESSION['apellido_p_admin'] = $apellido_p;
$_SESSION['apellido_m_admin'] = $apellido_m;
$_SESSION['lada_admin'] = $lada;
$_SESSION['telefono_admin'] = $telefono;
$_SESSION['contrasena_admin'] = $contrasena;
$_SESSION['horario_admin'] = $horario;
$_SESSION['puesto_admin'] = $puesto;
$_SESSION['usuario_admin'] = $usuario;
        header("location:admin.php");
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "3"){
    if($contrasena_db == $contrasena_ing){
        session_start();
$_SESSION['id_personal_regis'] = $id_personal;
$_SESSION['sede_regis'] = $sede;
$_SESSION['cupo_regis'] = $cupo;
$_SESSION['nombre_personal_regis'] = $nombre_personal;
$_SESSION['apellido_p_admin_regis'] = $apellido_p;
$_SESSION['apellido_m_regis'] = $apellido_m;
$_SESSION['lada_regis'] = $lada;
$_SESSION['telefono_regis'] = $telefono;
$_SESSION['contrasena_regis'] = $contrasena;
$_SESSION['horario_regis'] = $horario;
$_SESSION['puesto_regis'] = $puesto;
$_SESSION['usuario_regis'] = $usuario;
        header("location:regis.php");
    }else{
        
        echo "contrasenia o telefono incorrecto";
    }
}else if($usuario == "4"){
    if($contrasena_db == $contrasena_ing){
        session_start();
$_SESSION['id_personal_user'] = $id_personal;
$_SESSION['sede_user'] = $sede;
$_SESSION['cupo_user'] = $cupo;
$_SESSION['nombre_personal_user'] = $nombre_personal;
$_SESSION['apellido_p_admin_user'] = $apellido_p;
$_SESSION['apellido_m_user'] = $apellido_m;
$_SESSION['lada_user'] = $lada;
$_SESSION['telefono_user'] = $telefono;
$_SESSION['contrasena_user'] = $contrasena;
$_SESSION['horario_user'] = $horario;
$_SESSION['puesto_user'] = $puesto;
$_SESSION['usuario_user'] = $usuario;
        header("location:user.php");
        
    }else{
        echo "contrasenia o telefono incorrecto";
    }
}else{
    echo "error al validar datos";
}
?>
