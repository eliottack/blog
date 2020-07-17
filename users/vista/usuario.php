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

<body class="createtecnico">


			<section class="tecnicos__anuncios">
				<div class="container text-center">
					<strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["email"]; ?>
					<a href="cerrar-sesion.php" title="Cerrar sesion">Cerrar Sesion</a>
				</div>
			</section>

	</section>
	<script src="../../js/main.js"></script>
</body>
</html
