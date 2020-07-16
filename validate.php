<?php
	require_once './users/vista/config.php';
    $idmail = $_GET['id'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lambda</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" type="text/css" href="./css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<div class="wrapexito">
			<div class='wrapexito__big'>
				<div class='wrapexito__datos'>
					<h1 style="font-size:32px">¡Felicidades!</h1>
					<h2 style="font-size:22px">Tu email ha sido validado</h2>
					<br>
					<a href='./users/vista/index.php' class='wrapexito__link'>Iniciar sesión</a>
				</div>
			</div>
		</div>
	</body>
</html>
