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
    header("location:login.php");
}
?>

<?php
	// guardando variable de sesion
	$codigo = $_SESSION["usuario"]["email"];
	require_once '../../config.php';
?>

<body class="createtecnico">
	<section class="usuario-panel-wrap">
		<header class="createtecnico__header u-wrap">
			<div class="createtecnico__logo">
				<a href="../../index.php"><img src="../../images/logo2.png" alt="logo apphouse" class="createtecnico__img"></a>				
			</div>
		</header>
		<section class="tecnicos">
			<section class="tecnicos__header">
				<div>
					<h1>Buscador de trabajos</h1>
					<p>13.605 trabajos disponibles</p>
				</div>
				<div class="tecnicos__filtros">
					Filtros
				</div>
			</section>
			<section class="tecnicos__anuncios">
			<div class="container text-center">
				<strong>ver anuncio</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?>
				<a href="cerrar-sesion.php" title="Cerrar sesion">Cerrar Sesion</a>
			</div>
			<?php
			//buscando que el tecnico tenga membresia
				$sql = "SELECT * FROM tecnicos WHERE tec_idunico=:id";
				$query = $pdo->prepare($sql);

				$query->execute([
					'id' => $codigo
				]);

				$row = $query->fetch(PDO::FETCH_ASSOC);
				$membresiaValor = $row['tec_estado'];

				if($membresiaValor == "activo"){
					$query = $pdo->query('SELECT * FROM anuncios INNER JOIN subcategoria ON anuncios.ad_categoria=subcategoria.subcat_id INNER JOIN anunciantes ON anuncios.ad_idunico=anunciantes.anun_idunico INNER JOIN categoria ON subcategoria.subcat_idcat=categoria.cat_id WHERE ad_estado="publicado" ORDER BY ad_id DESC limit 50');
					while($x = $query->fetch(PDO::FETCH_ASSOC)){
					//ahora recorro toda la tabla mostrando los anuncios cuyo estado sea publicado
				?>

				<article class="tecnicos__anuncioitem">
					<div class="tecnicos__anunheader">
						<h2><?php echo $x['subcat_name']; ?></h2>
						<div class="tecnicos__header-item">
							<img src="../../images/ico-anuncio-flags.png"> <p>Categoria <strong><?php echo $x['cat_name']; ?></strong></p>
						</div>
						<div class="tecnicos__header-item">
							<img src="../../images/ico-anuncio-location.png"> <p>Lugar en <strong>Lima, Lima, Surco</strong></p>
						</div>
					</div>
					<div class="tecnicos__body">
						<p>
							<?php echo $x['ad_detalles']; ?>
						</p>
					</div>
					<div class="tecnicos__footer">
						<p>Publicado hace 50 dias</p>
						<div class="tecnicos__footer-wrap">
							<img src="../../images/ico-anuncio-like.png"> <p>Se el primero</p>
						</div>
					</div>
					<div class="tecnicos__tag">
						<div>
							<div class="tecnicos__tag-item">
								<img src="../../images/ico-anuncio-user.png"> <div>
								<?php 
								$nameValor = $x['anun_name'];
								echo $nameValor;
								?></div>
							</div>
							<div class="tecnicos__tag-item">
								<img src="../../images/ico-anuncio-phone.png"> <div>
								<?php 
								$nameValor = $x['anun_email'];
								echo $nameValor;
								?></div>
							</div>
							<div class="tecnicos__tag-item">
								<img src="../../images/ico-anuncio-mail.png"> <div>
								<?php 
								$nameValor = $x['anun_movil'];
								echo $nameValor;
								?></div>
							</div>
						</div>
					</div>
					<div class="tecnicos__buttom">
							<button type="submit" class="tecnicos__buttom-btn">
								<a href="./anuncio.php?cod=<?php echo $codigo; ?>&anuncio=<?php echo $x['ad_id'];?>">Ver mas detalles</a>
							</button>
					</div>
				</article>
			<?php
          		}

			}//aqui cierra el while que muestra la consulta
			else{
				echo "no tienes membresia adquiere membresia";
			}
			?>

			</section>
		</section>
		<section class="tecnicos__contenido-wrap">
		</section>

			<p>
				P
			</p>
			</a>
		</section>
	</section>
	<script src="../../js/main.js"></script>
</body>
</html
