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
            <!-- Content here 
          <li><a href="mi_cuenta.php">Mi cuenta</a></li>
          <li class="divider"></li>-->
          <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<form action="insertar_asistencia.php" method="post">

        <!-- Primera fila -->
        <table class="table">
          <tr>
            <td><!-- Tipos de Usuario -->
              <label for="sel1">tipo de usuario</label>
              <select class="form-control" id="tiempo" name="tiempo">
                <option>hr_entrada</option>
                <option>hr_comida_i</option>
                <option>hr_comida_f</option>
                <option>hr_salida</option>
              </select>
            </td>
          </tr>
        </table>
      
        <!-- Segunda fila -->
        <table class="table">
          <tr>
            <td><!-- cupo -->
              <input type="number" min="100000" max="999999" step="1" name="cupo" id="cupo" class="form-control" placeholder="cupo" required>
            </td>
            <td><!-- fecha -->
              <input type="date" name="fecha" id="fecha" class="form-control" placeholder="fecha" required>
            </td>
            <td><!-- hora -->
              <input type="time" name="hora" id="hora" class="form-control" placeholder="Apellido Materno" required>
            </td>
          </tr>
        </table>

        <!-- Tegunda columna -->
        <table class="table">
          <tr align="center">
            <td>
              <button type="submit" class="btn btn-primary">Insertar</button>
            </td>
          </tr>
        </table>
      </form>
     </div> 
  </body>
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </html>
