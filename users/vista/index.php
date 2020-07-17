<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="description" content="Lambda cursos online">
		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
	</head>
	<body>
		<div class="wrap">
			<div class="lateral">
				<header class="lateral__header">
					<img src="../../images/logo.png" alt="logo lambda">
					<div class="lateral__wellcome">Bienvenido</div>
				</header>
				<div class="lateral__form">
					<form class="login__form" id="loginForm" action="validarCode.php" method="POST" role="form">
						<div class="form-group">
							<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="Email">
						</div>

						<div class="form-group">
							<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="Contraseña">
						</div>
						<button type="submit" class="btn btn-success" style="background:#CAA23E; color:#ffffff; border:0">Iniciar Sesión</button>
				</form>
				</div>
				<div class="lateral__links">
					<a href="./signin.php" class="lateral__link-crearcuenta">Crear cuenta</a></br>
					<a href="" class="lateral__link-olvidaste">¿Olvidaste la contraseña?</a>
				</div>

			</div>
			<div class="hero">
				<img src="../../images/hero.jpg" class="hero__img">
			</div>
		</div>
	<script src="js/main.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
	</body>
</html>

