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
          <li><a href="mi_cuenta.php">Mi cuenta</a></li>
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
        <th>nombre</th>
        <th>hr entrada</th>
        <th>hora comida</th>
        <th>hora comida</th>
        <th>hr salida</th>
        <th>tolerancia</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //generamos la consulta
$sql = "select * from horarios";
      
if(!$result = mysqli_query($conexion, $sql)) die();

while($row = mysqli_fetch_array($result)) {
echo "<tr>";
    $hr_nombre=$row['hr_nombre'];
    echo "<td>" . $hr_nombre . "</td>";
    $hr_entrada=$row['hr_entrada'];
    echo "<td>" . $hr_entrada . "</td>";
    $hr_comida_i=$row['hr_comida_i'];
    echo "<td>" . $hr_comida_i . "</td>";
    $hr_comida_f=$row['hr_comida_f'];
    echo "<td>" . $hr_comida_f . "</td>";
    $hr_salida=$row['hr_salida'];
    echo "<td>" . $hr_salida . "</td>";
    $tolerancia=$row['tolerancia'];
    echo "<td>" . $tolerancia . "</td>";
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
