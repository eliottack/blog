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
		<div class="terminoswrap">
			<div class="userslateral">
				<header class="lateral__header">
					<img src="../../images/logo.png" alt="logo lambda">
				</header>

			</div>
			<section class="terminos">
				<strong>Tratamiento de datos personales: </strong>
				<p>
					De conformidad con la Ley N° 29733, Ley de Protección de Datos Personales, el participante da su consentimiento para el tratamiento de los datos personales que son facilitados mediante la pre inscripción e inscripción del 1° Concurso Internacional de Conocimientos en Teoría Económica y Finanzas. Estos serán incorporados en el banco de datos de usuarios de Grupo Lambda para utilizarlos en seguimiento de un eventual proceso de matrícula, envío de publicidad mediante cualquier medio y soporte, envío de invitaciones a actividades convocadas por Grupo Lambda, para fines estadísticos, gestiones institucionales y administrativas; y se mantendrán mientras sean útiles para que Grupo Lambda pueda prestar y ofrecer sus servicios y darles trámite.
				</p>
				<p>
					El usuario podrá solicitar rectificación, oposición y cancelación de los datos personales escribiendo a <a href="mailto:administracion@grupolambda.com.pe">administracion@grupolambda.com.pe</a>
				</p>
				<p>
					El participante declara que todos los datos brindados son verídicos. Caso contrario se tomarán las medidas oportunas del caso y no será admitido en nuestra institución.
				</p>
			</section>
		</div>
		<script src="../../js/main.js"></script>
	</body>
	</html
