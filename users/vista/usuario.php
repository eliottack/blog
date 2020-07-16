<!DOCTYPE html>
<html>
<head>
	<?php session_start(); ?>
	<meta charset="utf-8"/>
	<title>Zona para tecnicos | apphouse</title>
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
    header("location:index.php");
}
?>

<?php
	// guardando variable de sesion
	$codigo = $_SESSION["usuario"]["email"];
	require_once '../../config.php';
?>

<body class="createtecnico">
	<script src="../../js/main.js"></script>
</body>
</html
