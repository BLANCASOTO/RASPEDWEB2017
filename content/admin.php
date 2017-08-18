<?php
session_start();
$cupo = $_SESSION['cupo'];
echo $cupo;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RASPED</title>
 
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <!-- Asignar icono personalizado al sitio -->
    <link rel="icon" type="image/png" href="https://image.ibb.co/hksXN5/RASPED.png" />
  </head>
  
  <!-- Contenido de la paguina -->
  <body>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

    
  </body>
  <html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Asistencias</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Retardos</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Faltas</button>
</div>

<div id="London" class="tabcontent">
  <table>
<tbody>
  <!-- Aplicadas en las filas -->
  <tr class="active">...</tr>
  <tr class="success">...</tr>
  <tr class="warning">...</tr>
  <tr class="danger">...</tr>
 
  <!-- Aplicadas en las celdas (<td> o <th>) -->
  <tr>
    <td class="active">...</td>
    <td class="success">...</td>
    <td class="warning">...</td>
    <td class="danger">...</td>
  </tr>
</tbody>
</table>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html>
  <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
 
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="bootstrap/js/npm.js"></script>
</html>
