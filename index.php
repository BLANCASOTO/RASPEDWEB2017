<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>RASPED</title>
	<link rel="icon" type="image/png" href="https://image.ibb.co/hksXN5/RASPED.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap_logg.css" rel="stylesheet">		
</head>
<body>
	<div class="jumbotron text-center">
		<h1>RASPED</h1>
    	<img src="https://image.ibb.co/hksXN5/RASPED.png" class="img-rounded" alt="Cinque Terre" width="100" height=auto>
  	</div>
	<div class="text-center">
  	<div class="logo">Acceder</div>
  		<div class="login-form-1">
			<form action="php/evalua_log.php" method="POST" name="form_log" class="text-left" >
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" pattern="^[9|8|7|6|5|4|3|2|1|0]\d{9}$" required>    
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="contrasena" required>
					</div>
					<div class="form-group login-group-checkbox">
						<input type="checkbox" id="lg_remember" name="lg_remember">
						<label for="lg_remember">recordar</label>
					</div>
				</div>
				<button type="submit" class="login-button">
					<span class="glyphicon glyphicon-arrow-up"></span>
                		</button>
			</div>
			<div class="etc-login-form">
				<p>Olvidaste tu contrasena? <a href="#">Click Aqui</a></p>
				<p>Eres nuevo? <a href="#">Registrate aqui</a></p>
			</div>
		    </form>
		</div>
	</div>
</body>
<script src="js/jquery_logg.js"></script>
</html>
