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
				<a href="../../index.html"><img src="../../images/logo2.png" alt="logo apphouse"></a>
			</header>
			<form id="loginForm" action="validarCode.php" method="POST" role="form">
				<legend>Iniciar sesión</legend>

				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus required placeholder="usuario">
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="txtPassword" class="form-control" required id="password" placeholder="****">
				</div>
				<button type="submit" class="btn btn-success">Ingresar</button>
			</form>
	<?php include 'partials/footer.php';?>