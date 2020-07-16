		<?php
			//recibo todos los datos
			include_once './config.php';
			$emaildb = "";
			if(!empty($_POST)) {
				$fecha = $_POST['date'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$passwordRepeat = $_POST['passwordRepeat'];

				$privilegio = "2";

				$extrac_mail=substr($email,0,6);
				$f_ano=substr($fecha, 0,4);
				$f_pass=substr($password, -3);
				$f_dia=substr($fecha, -2);
				$f_mes=substr($fecha, 5,-3);
				$idunico = $extrac_mail. $f_ano.$f_pass.$f_mes.$f_dia;

				//reviso si el email ingresado ya existe
				$sqlx = "SELECT * FROM  login_users WHERE usuario=:email";
				$queryx = $pdo->prepare($sqlx);
				$queryx->execute([
					'email' => $email
				]);

				while($x = $queryx->fetch(PDO::FETCH_ASSOC)){
				$emaildb = $x['usuario'];
				}

			} 
		?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lambda</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body>
		<div class="wrapexito">
			<?php
				//luego hago la condicion. Si existe envio mensaje de ya registrado
				if ($email == $emaildb){
					echo "<div class='wrapexito__big'>";
						echo "<div class='wrapexito__datos'>";
							echo "<p>ya estas registrado con el email ".$emaildb . "</p><br>";
							echo "<a href='./signin.php' class='wrapexito__link'>Verifica e iniciar sesión</a>";
						echo "</div>";
					echo "</div>";
				}
				else
				{
					//luego hago la condicion. Si no existe lo registro
					$sql = "INSERT INTO users (users_idunico, users_email, users_password) VALUES (:id, :email, :password)";

					$sqlcod = "INSERT INTO login_users(usuario, email, password, privilegio) VALUES (:usuario, :codigo, :contrasena, :privilegio)";

					//preparar
					$query = $pdo ->prepare($sql);
					$querycod = $pdo ->prepare($sqlcod);

					$result = $query->execute([
						'id' => $idunico,
						'email' => $email,
						'password' => $password
					]);

					$resultcod = $querycod->execute([
						'usuario' => $email,
						'codigo' => $idunico,
						'contrasena' => $password,
						'privilegio' => $privilegio
					]);
					//final del bloque else
					echo "<div class='wrapexito__big'>";
						echo "<div class='wrapexito__datos'>";
							echo "<h1>¡Felicidades!</h1>";
							echo "<h2> Tu cuenta ha sido creada</h2>";
							echo "<p>Verifica tu email " . $email . "<br>";
							echo "Para completar tu registro</p><br>";
							echo "<a href='./signin.php' class='wrapexito__link'>Verifica e iniciar sesión</a>";
						echo "</div>";
					echo "</div>";
				}			
			?>
		</div>
	</body>
</html>