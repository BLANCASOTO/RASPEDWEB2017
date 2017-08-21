<?php
session_start();

require_once ('mysql-login.php');
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
mysqli_set_charset($conexion, "utf8"); 

$id_personal_admin = $_SESSION['id_personal_admin'];
$sede_admin =$_SESSION['sede_admin'];
$cupo_admin = $_SESSION['cupo_admin'];
$nombre_personal_admin = $_SESSION['nombre_personal_admin'];
$apellido_p_admin = $_SESSION['apellido_p_admin'];
$apellido_m_admin = $_SESSION['apellido_m_admin'];
$lada_admin = $_SESSION['lada_admin'];
$telefono_admin = $_SESSION['telefono_admin'];
$contrasena_admin = $_SESSION['contrasena_admin'];
$horario_admin = $_SESSION['horario_admin'];
$puesto_admin = $_SESSION['puesto_admin'];
$usuario_admin = $_SESSION['usuario_admin'];

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Administrador</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    
    <!-- Asignar icono personalizado al sitio -->
    <link rel="icon" type="image/png" href="https://image.ibb.co/hksXN5/RASPED.png" />
  </head>
  
  <!-- Contenido de la paguina -->
  <body>
    <div class="container">
  <!-- Content here -->
      <nav class="navbar navbar-default" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <img src="https://image.ibb.co/hksXN5/RASPED.png" class="img-rounded" alt="Cinque Terre" width="8%">
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    
    <ul class="nav navbar-nav">
      <li><a href="#"><?php echo $nombre_personal_admin . " " . $apellido_p_admin; ?></a></li>
      <li><a href="#"><?php echo $lada_admin,$telefono_admin; ?></a></li>
      <li><a href="#"><?php echo $sede_admin,$cupo_admin; ?></a></li>
    </ul>
 
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Opciones <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="horarios.php">Horarios</a></li>
          <li class="divider"></li>
          <li><a href="personal.php">Personal</a></li>
          <li class="divider"></li>
           <!-- Asignar icono personalizado al sitio
          <li><a href="mi_cuenta.php">Mi cuenta</a></li> -->
          <li class="divider"></li>
          <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>cupo</th>
        <th>nombre</th>
        <th>telefono</th>
        <th>horario</th>
        <th>puesto</th>
        <th>usuario</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //generamos la consulta
$sql = "SELECT concat(CUP.fk_sede, CUP.cupo) as cupo,
concat(PER.nombre_personal, ' ' ,PER.apellido_p) as nombre,
concat(TEL.fk_lada,TEL.telefono) as telefono,
HOR.hr_nombre as horario,
PUE.nombre_puesto as puesto,
USU.usuario
FROM personal PER, telefonos TEL, cupos CUP, horarios HOR, puestos PUE,usuarios USU
WHERE PER.fk_cupo = CUP.id_cupo and
PER.fk_telefono = TEL.id_telefono and
PER.fk_horario = HOR.id_horario and
PER.fk_puesto = PUE.id_puesto and
PER.fk_usuario = USU.id_usuario";
      
if(!$result = mysqli_query($conexion, $sql)) die();

while($row = mysqli_fetch_array($result)) {
echo "<tr>";
    $cupo=$row['cupo'];
    echo "<td>" . $cupo . "</td>";
    $nombre=$row['nombre'];
    echo "<td>" . $nombre . "</td>";
    $telefono=$row['telefono'];
    echo "<td>" . $telefono . "</td>";
    $horario=$row['horario'];
    echo "<td>" . $horario . "</td>";
    $puesto=$row['puesto'];
    echo "<td>" . $puesto . "</td>";
    $usuario=$row['usuario'];
    echo "<td>" . $usuario . "</td>";
echo "<tr>";
}
      ?>
    </tbody>
  </table>
      </div>
  </body>
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </html>
