<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<div class="wrap">
			<div class="lateral">
				<header class="lateral__header">
					<img src="../../images/logo.png" alt="logo lambda">
					<div class="lateral__wellcome">Bienvenido</div>
				</header>
				<div class="lateral__form">
					<form class="login__form" action="validarCode.php" method="POST" role="form">
					<div class="form-group">
						<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Email">
					</div>

					<div class="form-group">
						<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="Contraseña">
					</div>
					<button type="submit" class="btn btn-success">Iniciar Sesión</button>
				</form>
				</div>
				<div class="lateral__links">
					<a href="./create.php" class="lateral__link-crearcuenta">Crear cuenta</a></br>
					<a href="" class="lateral__link-olvidaste">¿Olvidaste la contraseña?</a>
				</div>

			</div>
			<div class="hero">
			<img src="" alt="">
			</div>
		</div>
	<script src="js/main.js"></script>
	</body>
</html>

