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

		$sql = "SELECT * FROM users WHERE users_idunico=:id";
		$query = $pdo->prepare($sql);
	
		$query->execute([
			'id' => $codigo
		]);
	
		$row = $query->fetch(PDO::FETCH_ASSOC);
		$nameValor = $row['users_name'];
		$lastnameValor = $row['users_lastname'];
		$emailValor = $row['users_email'];
		$celularValor = $row['users_celular'];
		$countryValor = $row['users_country'];
		$depaValor = $row['users_departamento'];
		$provinceValor = $row['users_province'];
		$districtValor = $row['users_district'];
		$birthdayValor = $row['users_birthday'];
		$birthmonthValor = $row['users_birthmonth'];
		$birthyearValor = $row['users_birthyear'];
		$genderValor = $row['users_gender'];
		$dniValor = $row['users_dni'];
		$universityValor = $row['users_university'];
		$cicloValor = $row['users_ciclo'];
		$gradoValor = $row['users_grado'];
		$inglesValor = $row['users_ingles'];
		$jobValor = $row['users_job'];

	?>

	<body>
		<div class="userswrap">
			<div class="userslateral">
				<header class="lateral__header">
					<img src="../../images/logo.png" alt="logo lambda">
				</header>
				<div class="userslateral__menu">
					<ul>
						<li>
						<img src="../../images/ico-tablero.png" alt="" class="iconosmenu"><a href="./usuario.php">Tablero</a>
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
						<li style="background:#B60011">
						<img src="../../images/ico-configuracion-white.png" alt="" class="iconosmenu"><a href="./configuraciones.php"  style="color:#ffffff">Configuraciones</a>
						</li>
					</ul>
				</div>
			</div>
			<section class="content">
				<header class="content__header">
					<div class="content__search">
						<!-- <form class="content__formusers" action="profile-update.php" method="post">
							<input type="text" name="search" id="name" value="Buscar" maxlength="40">
							<input type="submit" name="" value="buscar" class="btn-search">
						</form> -->
					</div>
				</header>
				<section>
				<p>Configuraciones</p>
				<h3 class="content__title">Registro de usuario</h3>
					<form class="content__formUsers" action="profile-update.php" method="post">
						<input type='hidden' name='date' value="<?php echo $fecha; ?>">
						<div class="contentFormUser__wrap">
							<div class="contentFormUser__item">
								<label for="name" class="contentFormUser__label">Nombre:</label><br />
								<input type="text" name="name" id="name" value="<?php echo $nameValor; ?>" required maxlength="20"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="name" class="contentFormUser__label">Apellido:</label><br />
								<input type="text" name="lastname" id="name" value="<?php echo $lastnameValor; ?>" required maxlength="20"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="email" class="contentFormUser__label">Email:</label><br />
								<input type="email" name="email" id="email" value="<?php echo $emailValor; ?>" required maxlength="50"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="movil" class="contentFormUser__label">Celular:</label><br />
								<input type="number" name="movil" id="movil"  value="<?php echo $celularValor; ?>" required maxlength="9"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="paistitle">Pais</label><br />
								<select name="country" class="listaform">
								<option value="">[Cambiar por]</option>
									<?php
										$queryResult = $pdo->query('SELECT * FROM paises ORDER BY pais_id ASC ');
										while($row = $queryResult->fetch()){

											if($row["pais_id"] == $countryValor)
												{
													echo "<option selected='selected' value='".$row["pais_id"]."'>".$row["pais_name"]."</option>";
												}
											else {
													echo "<option value='".$row["pais_id"]."'>".$row["pais_name"]."</option>";
												}
										};
									?>
								</select>
							</div>
							<div class="contentFormUser__item">
								<label for="departamento" class="formuser__label">Departamento:</label><br />
								<input type="text" name="departamento" id="departamento"  value="<?php echo $depaValor; ?>" required><br />
							</div>
							<div class="contentFormUser__item">
								<label for="province" class="formuser__label">Provincia:</label><br />
								<input type="text" name="province" id="province"  value="<?php echo $provinceValor; ?>" maxlength="20"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="district" class="formuser__label">Distrito:</label><br />
								<input type="text" name="district" id="district"  value="<?php echo $districtValor; ?>" maxlength="20"><br />
							</div>
							<div class="contentFormUser__item">
								<label for="day" class="formuser__label">Fecha de nacimiento:</label><br />
								<select name="day" class="listaNacimiento">
									<option value="">Día</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM birthday ORDER BY bd_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["bd_id"] == $birthdayValor)
													{
														echo "<option selected='selected' value='".$row["bd_id"]."'>".$row["bd_number"]."</option>";
													}
												else {
														echo "<option value='".$row["bd_id"]."'>".$row["bd_number"]."</option>";
													}
											};
										?>
									</select>
									<select name="month" class="listaNacimiento">
									<option value="">Mes</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM birthmonth ORDER BY bm_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["bm_id"] == $birthmonthValor)
													{
														echo "<option selected='selected' value='".$row["bm_id"]."'>".$row["bm_name"]."</option>";
													}
												else {
														echo "<option value='".$row["bm_id"]."'>".$row["bm_name"]."</option>";
													}
											};
										?>
									</select>
									<select name="year" class="listaNacimiento">
									<option value="">Año</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM birthyear ORDER BY by_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["by_id"] == $birthyearValor)
													{
														echo "<option selected='selected' value='".$row["by_id"]."'>".$row["by_year"]."</option>";
													}
												else {
														echo "<option value='".$row["by_id"]."'>".$row["by_year"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<div class="contentFormUser__item">
								<label for="gender" class="formuser__label">Genero:</label><br />
								<input type="text" name="gender" id="gender"  value="<?php echo $genderValor; ?>" required maxlength="9"><br />				
							</div>
							<div class="contentFormUser__item">
								<label for="dni" class="formuser__label">DNI:</label><br />
								<input type="number" name="dni" id="dni"  value="<?php echo $dniValor; ?>" maxlength="8" required><br />				
							</div>
							<div class="contentFormUser__item">
								<label for="unititle">Universidad:</label><br />
									<select name="university" class="listaform">
									<option value="">[Cambiar por]</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM university ORDER BY university_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["university_id"] == $universityValor)
													{
														echo "<option selected='selected' value='".$row["university_id"]."'>".$row["university_name"]."</option>";
													}
												else {
														echo "<option value='".$row["university_id"]."'>".$row["university_name"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<div class="contentFormUser__item">
								<label for="ciclotitle">Ciclo:</label><br />
									<select name="ciclo" class="listaform">
									<option value="">[Cambiar por]</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM ciclos ORDER BY ciclos_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["ciclos_id"] == $cicloValor)
													{
														echo "<option selected='selected' value='".$row["ciclos_id"]."'>".$row["ciclos_name"]."</option>";
													}
												else {
														echo "<option value='".$row["ciclos_id"]."'>".$row["ciclos_name"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<div class="contentFormUser__item">
								<label for="gradotitle">Grado Academico:</label><br />
									<select name="degree" class="listaform">
									<option value="">[Cambiar por]</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM grado_academico ORDER BY grado_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["grado_id"] == $gradoValor)
													{
														echo "<option selected='selected' value='".$row["grado_id"]."'>".$row["grado_name"]."</option>";
													}
												else {
														echo "<option value='".$row["grado_id"]."'>".$row["grado_name"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<div class="contentFormUser__item">
								<label for="inglestitle">Nivel de inglés:</label><br />
									<select name="english" class="listaform">
									<option value="">[Cambiar por]</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM ingles ORDER BY ingles_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["ingles_id"] == $inglesValor)
													{
														echo "<option selected='selected' value='".$row["ingles_id"]."'>".$row["ingles_level"]."</option>";
													}
												else {
														echo "<option value='".$row["ingles_id"]."'>".$row["ingles_level"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<div class="contentFormUser__item">
								<label for="jobtitle">Labora:</label><br />
									<select name="job" class="listaform">
									<option value="">[Cambiar por]</option>
										<?php
											$queryResult = $pdo->query('SELECT * FROM job ORDER BY job_id ASC ');
											while($row = $queryResult->fetch()){

												if($row["job_id"] == $jobValor)
													{
														echo "<option selected='selected' value='".$row["job_id"]."'>".$row["job_name"]."</option>";
													}
												else {
														echo "<option value='".$row["job_id"]."'>".$row["job_name"]."</option>";
													}
											};
										?>
									</select>
							</div>
							<label><input type="radio" name="terms" value="acepto Terminos" required>Acepto las condiciones de tratamiento para mis datos personales. <a href="./terminos.php" target="_blank">(Ver términos)</a></label>
							<br />	<br />
							<br />	<br />
							<input type="hidden" name="idunico" value="<?php echo $codigo; ?>">
							<input type="submit" name="" value="Guardar" class="btn-formUser">
							
						</div>
					</form>
				</section>
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
