<?php include 'partials/head2.php';?>

<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>


<?php echo $_SESSION["usuario"]["nombre"]; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body class="admin">
	<header class="admin__header">
		<img src="../../images/logo2.png" class="admin__logo"><br />
		<a href="cerrar-sesion.php" title="Cerrar sesion">Cerrar Sesion</a>
	</header>
	<section class="admin__wrap">
		<section class="admin__lateral">
			<div class="admin__menu">
				<ul>
					<li class="admin__menu-active"><a href="./admin.php">Resumen</a></li>
					<li><a href="./usuarios.php">Usuarios</a></li>
					<li><a href="./anuncios.php">Anuncios</a></li>
					<li><a href="./servicios.php">Servicios</a></li>
				</ul>
			</div>
		</section>
		<section class="admin__cuerpo">
			<div>
				<h3>Bienvenido a tu panel de administración</h3>
				<p>Resumen de Rendimiento según fechas</p>
			</div>
			<div class="admin__block1">
				<h3>Tecnicos</h3>
				<div class="perfil-cuerpo-form">
					<?php
						require_once '../../config.php';
						$queryResult = $pdo->query('SELECT * FROM tecnicos ORDER BY tec_id DESC LIMIT 50');
					?>
					<table class="table-striped table-hover table-condensed">
						<tr>
							<th>Nombre</th>
							<th>Email</th>
							<th>Empresa</th>
							<th>Telefono</th>
							<th>Whatsapp</th>
						</tr>
						<?php
							while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
							echo '<tr>';
							echo '<td>' . $row['tec_name'] . '</td>';
							echo '<td>' . $row['tec_email'] . '</td>';
							echo '<td>' . $row['tec_companysize'] . '</td>';
							echo '<td>' . $row['tec_movil'] . '</td>';
							echo '<td>' . $row['tec_whatsapp'] . '</td>';
							echo '</tr>';
						}
						?>
					</table>
				</div>
				<br>
				<h3>Anunciantes</h3>
				<div class="perfil-cuerpo-form">
					<?php
						$queryResult = $pdo->query('SELECT * FROM anunciantes ORDER BY anun_id DESC LIMIT 50');
					?>
					<table class="table-striped table-hover table-condensed">
						<tr>
							<th>Nombre</th>
							<th>Email</th>
							<th>Telefono</th>
							<th>Whatsapp</th>
						</tr>
						<?php
							while($row = $queryResult->fetch(PDO::FETCH_ASSOC)){
							echo '<tr>';
							echo '<td>' . $row['anun_name'] . '</td>';
							echo '<td>' . $row['anun_email'] . '</td>';
							echo '<td>' . $row['anun_movil'] . '</td>';
							echo '<td>' . $row['anun_whatsapp'] . '</td>';
							echo '</tr>';
						}
						?>
					</table>
				</div>
			</div>
			<div class="admin__block2">
				
			</div>
			<div class="admin__block3">
				
			</div>
			<div class="admin__block4">
				<div class="admin__block4-left">
					
				</div>
				<div class="admin__block4-right">
					
				</div>
			</div>
		</section>

	</section>
</body>
</html>

<?php include 'partials/footer.php';?>
<script src="../../js/main.js"></script>
</body>
</html>