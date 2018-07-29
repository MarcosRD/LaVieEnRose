<?php
	include_once "../model/Estructura.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<?php Estructura::getHead(); ?>
	<body>
	<div class="box-wrap">
		<?php Estructura::getMenu(3); ?>
		<!-- END: header -->
		<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
			<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 float-overlay">
							<h2>¿Quienes somos?</h2>
							<h3>La mejor floreria de tehuacán, con los mejores diseños para tus eventos.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="about-section">
							<h2 class="animate-box">Misión</h2>
							<blockquote class="animate-box">
								<p class="animate-box"> <em>Somos una empresa joven dedicada a la elaboración de arreglos 100% artesanales, nos enfocamos en el diseño y armado para cualquier ocasión y evento social.</em></p>
							</blockquote>
						</div>
						<div class="about-section">
							<h2 class="animate-box">Visión</h2>
							<blockquote class="animate-box">
								<p class="animate-box"> <em>Lograr ser una Floristería que se distinga de las demás por su diseño y decoración 100% artesanal; siendo nuestro principal objetivo la satisfacción de nuestros clientes a través de la elaboración, el diseño y la forma de entrega.</em></p>
							</blockquote>
						</div>
						<div class="about-section">
							<h2 class="animate-box">Horarios</h2>
							<blockquote class="animate-box">
								<p class="animate-box"> <strong>Lunes: </strong> 9:00 - 21:00</p>
							</blockquote>
							<blockquote>
								<p class="animate-box"> <strong>Martes: </strong> 9:00 - 21:00</p>
							</blockquote>
							<blockquote>
								<p class="animate-box"> <strong>Miercoles: </strong> 9:00 - 21:00</p>
							</blockquote>
							<blockquote>
								<p class="animate-box"> <strong>Viernes: </strong> 9:00 - 21:00</p>
							</blockquote>
							<blockquote>
								<p class="animate-box"> <strong>Sabado: </strong> 9:00 - 21:00</p>
							</blockquote>
							<blockquote>
								<p class="animate-box"> <strong>Domingo: </strong> CERRADO</p>
							</blockquote>
						</div>
					</div>
					<div class="col-md-3">
						<div class="sidebar">
							<div class="inner animate-box">
								<h2>Categorias</h2>
								<ul class="list">
									<li><a href="#">Regalos</a>
										<ul>
											<li><a href="#">Cajas</a></li>
											<li><a href="#">Arreglos</a></li>
											<li><a href="#">Letras</a></li>
										</ul>
									</li>
									<li><a href="#">Graduaciones</a></li>
									<li><a href="#">Canastas</a></li>
									<li><a href="#">Decoracion de fiestas</a></li>
									<li><a href="#">Funerales</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php Estructura::getFooter(); ?>
	</div>
	<!-- END: box-wrap -->
	<?php Estructura::getScript(); ?>

	</body>
</html>
