<!DOCTYPE html>
<html>
	<head>
		<?php session_start(); ?>
		<meta charset="utf-8"/>
		<title>Zona alumnos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<link href="https://fonts.googleapis.com/css?family=Anton|Zilla+Slab+Highlight" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="../../js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="../../js/vendor/jquery-1.10.2.min.js"></script> 
	</head>
	<?php
	if (isset($_SESSION["usuario"])) {
		if ($_SESSION["usuario"]["privilegio"] == 1) {
			header("location:admin.php");
		}
	} else {
		header("location:login.php");
	}
	?>

	<?php
		// guardando variable de sesion
		$codigo = $_SESSION["usuario"]["email"];
		require_once './usuariosConfig.php';
	?>

	<body>
		<div class="userswrap">
			<div class="userslateral">
				<header class="lateral__header">
					<img src="../../images/logo.png" alt="logo lambda">
				</header>
				<div class="userslateral__menu">
					<ul>
						<li style="background:#B60011">
							<img src="../../images/ico-tablero-white.png" alt="" class="iconosmenu"><a href="./index.php" style="color:#ffffff">Tablero</a>
						</li>
						<li>
							<img src="../../images/ico-cursos.png" alt="" class="iconosmenu"><a href="#">Mis Cursos</a>
						</li>
						<li>
							<img src="../../images/ico-chat.png" alt="" class="iconosmenu"><a href="#">Chat</a>
						</li>
						<li>
							<img src="../../images/ico-anuncio.png" alt="" class="iconosmenu"><a href="#">Anuncios</a>
						</li>
						<li>
							<img src="../../images/ico-foro.png" alt="" class="iconosmenu"><a href="#">Foro</a>
						</li>
						<li>
							<img src="../../images/ico-configuracion.png" alt="" class="iconosmenu"><a href="./configuraciones.php">Configuraciones</a>
						</li>
					</ul>
				</div>
			</div>
			<section class="content">

			</section>
			<section class="contentRight">
				<header class="contentRight__header">
					<div>
						<?php echo $_SESSION["usuario"]["usuario"]; ?>
					</div>
					<div>
						<a href="cerrar-sesion.php" title="Cerrar sesion">
							<img src="../../images/logout.png" alt="">
						</a>
					</div>
				</header>
			</section>
		</div>
		<script src="../../js/main.js"></script>
	</body>
	</html
