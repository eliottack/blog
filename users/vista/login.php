<!DOCTYPE html>
<html>
	<head>
		<title>App house login tecnico</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
	</head>
	<body class="login__bg">
		<header class="login__header">
			<div class="createone">
				<div class="createone__atras">
					<a href="../../index.php"><img src="../../images/atras.png" class="u-btn_atras createone__img"></a>
				</div>
				<div class="createone__logo">
					<a href="../../index.php"><img src="../../images/logo2.png" alt="logo apphouse"></a>
				</div>
			</div>
		</header>
		<p class="create__title">
			Inicias Sesión<br />
			Técnicos o empresas</p>
		<div class="create-wrap">
			<section class="create">
				<form class="login__form" id="loginForm" action="validarCode.php" method="POST" role="form">
					
						<label for="usuario">Email</label><br />
						<input type="text" name="txtUsuario" class="login_label" id="usuario" autofocus required placeholder="Escribe tu e-mail"><br />

						<label for="password">Contraseña</label><br />
						<input type="password" name="txtPassword" class="login_label" required id="password" placeholder="****"><br />

						<button type="submit" class="btn btn-success">Iniciar sesión</button>
				</form>
			</section>
			<section class="logindata">
				<div class="logindata__anunciante">
					<p>¿Eres un Anunciante?<br/> <a href="../../anunciantes/vista/login.php" class="logindata__link">Iniciar sesión Aquí</a></p>
				</div>

				<div class="logindata__revovery">
					<p><a href="./recovery.html" class="logindata__link">Olvidé mi contraseña</a><br/> ¿No estas registrado? <a href="./create-tecnico.php" class="logindata__link">Crear cuenta</a></p>
				</div>
			</section>
		</div>

	<?php include 'partials/footer.php';?>