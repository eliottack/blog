<!DOCTYPE html>
<html>
	<head>
		<title>App house Crear cuenta</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../../css/app.css">
		<script src="js/vendor/jquery-1.10.2.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	</head>
	<body class="createtecnico">
		<header class="createtecnico__header u-wrap">
			<div class="createtecnico__logo">
				<a href="../../index.php"><img src="../../images/logo2.png" alt="logo apphouse" class="createtecnico__img"></a>				
			</div>
			<div class="createtecnico__derecha">
				<div>
					<img src="../../images/image1.png" class="createtecnico__img-people">
				</div>
				<div>
					<p>Tienes alguna duda</p>
					<p>Te asesoramos sin compromiso</p>
				</div>
				<buttom class="createtecnico__btn-call">Te llamamos</buttom>
			</div>
		</header>
		<section class="createtecnico__title">
			<h2>Registrarme gratis como técnico o empresa</h2>
			<p>Sobre de negocio - Paso 1 de 3</p>
		</section>
		<section class="createtecnico__form-wrap">
			<h3>Indica el tamaño de tu negocio</h3>
			<form class="createtecnico__form" action="create-tecnico2.php" method="post">
				<label class="createtecnico__item--box">
					<input type="radio" name="size" value="Autónomo">Autónomo</label><br />
				<label class="createtecnico__item--box">
					<input type="radio" name="size" value="Empresa < 10 empleados">Empresa < 10 empleados</label><br />
				<label class="createtecnico__item--box">
					<input type="radio" name="size" value="Empresa 10 a 20 empleados">Empresa 10 a 20 empleados</label><br />

				<label class="createtecnico__item--box">
					<input type="radio" name="size" value="Empresa > 20 empleados">Empresa > 20 empleados</label><br />

				<label class="createtecnico__item--box">
					<input type="radio" name="size" value="Ninguno de los anteriores">Ninguno de los anteriores</label><br />
					<div class="createtecnico__btn-wrap">
						<input type="submit" name="siguiente" value="Siguiente" class="createtecnico__btn">
					</div>
			</form>
		</section>
		<footer class="footerContainer u-wrap">
			<section class="footer">
				<div class="footer__item">
					<h4 class="footer_title">Mejora tu hogar</h4>
					<ul>
						<li>Pedir un Técnico</li>
						<li>Preguntas frecuentes</li>
					</ul>
				</div>
				<div class="footer__item">
					<h4 class="footer_title">Anunciantes</h4>
					<ul>
						<li>Crear anuncio gratis</li>
						<li>Preguntas frecuentes</li>
						<li>Mis anuncios</li>
						<li>¿Olvidaste contraseña?</li>
					</ul>
				</div>
				<div class="footer__item">
					<h4 class="footer_title">Técnicos</h4>
					<ul>
						<li>Últimos anuncios</li>
						<li>Preguntas Frecuentes</li>
						<li>Mi Perfil</li>
						<li>Crear cuenta</li>
					</ul>
				</div>
				<div class="footer__item">
					<h4 class="footer_title">Contactos</h4>
					<ul>
						<li>Conócenos</li>
						<li>Contactos</li>
						<li>987 654 321</li>
						<li>
							<img src="./images/footer-fb.png" class="footer-ico">
							<img src="./images/footer-l.png" class="footer-ico">
							<img src="./images/footer-ig.png" class="footer-ico">
							<img src="./images/footer-yt.png" class="footer-ico">
						</li>
					</ul>
				</div>
			</section>
			<p>App House® 2020</p>
		</footer>
	</body>
</html>