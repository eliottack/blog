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
	?>

<?php
		include_once './usuariosConfig.php';
		$result = false;
		if(!empty($_POST)) {
			$idunico = $_POST['idunico'];
			$nuevoName = $_POST['name'];
			$nuevoLastname = $_POST['lastname'];
			$nuevoEmail = $_POST['email'];
			$nuevoMovil = $_POST['movil'];
			$nuevoCountry = $_POST['country'];
			$nuevoDepartamento = $_POST['departamento'];
			$nuevoProvince = $_POST['province'];
			$nuevoDistrict = $_POST['district'];
			$nuevoDay = $_POST['day'];
			$nuevoMonth = $_POST['month'];
			$nuevoYear = $_POST['year'];
			$nuevoGender = $_POST['gender'];
			$nuevoDni = $_POST['dni'];
			$nuevoUniversity = $_POST['university'];
			$nuevoCiclo = $_POST['ciclo'];
			$nuevoDegree = $_POST['degree'];
			$nuevoEnglish = $_POST['english'];
			$nuevoJob = $_POST['job'];
			$nuevoTerms = $_POST['terms'];

			$sql = "UPDATE users SET users_name=:nombre, users_lastname=:lastname, users_email=:email, users_celular=:movil, 
			users_country=:country, users_departamento=:departamento, users_province=:province, users_district=:district,
			 users_birthday=:birthday, users_birthmonth=:birthmonth, users_birthyear=:birthyear, users_gender=:gender,
		 users_dni=:dni, users_university=:university, users_ciclo=:ciclo, users_grado=:grado, 
			users_ingles=:ingles, users_job=:job, users_terms=:terms WHERE users_idunico=:id";

			//preparar
			$query = $pdo->prepare($sql);
			$result = $query->execute([
				'id' => $idunico,
				'nombre' => $nuevoName,
				'lastname' => $nuevoLastname,
				'email' => $nuevoEmail,
				'movil' => $nuevoMovil,
				'country' => $nuevoCountry,
				'departamento' => $nuevoDepartamento,
				'province' => $nuevoProvince,
				'district' => $nuevoDistrict,
				'birthday' => $nuevoDay,
				'birthmonth' => $nuevoMonth,
				'birthyear' => $nuevoYear,
				'gender' => $nuevoGender,
				'dni' => $nuevoDni,
				'university' => $nuevoUniversity,
				'ciclo' => $nuevoCiclo,
				'grado' => $nuevoDegree,
				'ingles' => $nuevoEnglish,
				'job' => $nuevoJob,
				'terms' => $nuevoTerms
			]);

		} 
	?>

	<body>
		<div class="wrapexito">
			<div class='wrapexito__big'>
				<div class='wrapexito__datos'>
				<h1>¡Felicidades!</h1>
				<h2><?php echo $nuevoName; ?> <?php echo $nuevoLastname; ?></h2>
				<p>Tus datos fueros registrados con éxito</p>
					<a href="cerrar-sesion.php" class="wrapexito__link">Cerrar sesión</a>
				</div>
			</div>
		</div>
	</body>
	</html
