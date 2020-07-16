<?php $fecha = date("Y-m-d"); ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Lambda</title>
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
					<div class="lateral__wellcome">Crear cuenta</div>
				</header>
				<div class="lateral__form">
					<form class="login__form" action="signin-insert.php" method="POST" role="form">
					<input type='hidden' name='date' value="<?php echo $fecha; ?>">
					<div class="form-group">
						<input type="text" name="email" class="form-control" id="email" autofocus required placeholder="Email">
					</div>

					<div class="form-group">
						<input type="password" name="password" class="form-control" required id="password" placeholder="Contraseña">
					</div>
					<div class="form-group">
						<input type="password" name="passwordRepeat" class="form-control" required id="passwordRepeat" placeholder="Confirmar contraseña">
					</div>
					<button type="submit" class="btn btn-success">Registrarte</button>
				</form>
				</div>
				<div class="lateral__links">
					<a href="./index.php" class="lateral__link-crearcuenta">Iniciar Sesión</a></br>
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

