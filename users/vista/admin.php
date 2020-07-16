<?php include 'partials/head.php';?>
<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:usuario.php");
    }
} else {
    header("location:index.php");
}
?>

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
					<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				</div>
				<div class="lateral__links">
				<a href="cerrar-sesion.php" title="Cerrar sesion">Cerrar Sesion</a>
				</div>

			</div>
			<div class="hero">
			<img src="" alt="">
			</div>
		</div>
	<script src="js/main.js"></script>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/overhang.min.js"></script>
    <script src="assets/js/app.js"></script>
	</body>
</html>

