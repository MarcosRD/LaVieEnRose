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
		<?php Estructura::getMenu(4); ?>
		<!-- END: header -->
		<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
			<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/intro.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 float-overlay">
							<h2>Contactanos</h2>
							<h3>Para ofrecerte un mejor servicio, es necesario que nos dejes tu comentario.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="col-md-4 animate-box">
					<h3 class="section-title">Nuestra dirección</h3>
					<p>Los comentarios nos ayudan a mejorar como negocio, gracias.</p>
					<ul class="contact-info">
						<li><i class="icon-location-pin"></i>Callejón Cristobal Palacios #216 Tehuacán</li>
						<li><i class="icon-phone2"></i>01 238 401 6707</li>
						<li><i class="icon-mail"></i><a href="#">LaVieEnRose@gmail.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.LaVieEnRose.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 animate-box">
					<form action="#">
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="firstname">Nombre (s)</label>
								<input type="text" name="FName" id="firstname" class="form-control">
							</div>
							<div class="col-md-6 field">
								<label for="lastname">Apellido (s)</label>
								<input type="text" name="FName" id="lastname" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 field">
								<label for="email">Correo</label>
								<input type="text" name="FName" id="email" class="form-control">
							</div>
							<div class="col-md-6 field">
								<label for="phone">Teléfono</label>
								<input type="text" name="FName" id="phone" class="form-control">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 field">
								<label for="message">Comentario</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 field">
								<input type="submit" id="submit" class="btn btn-primary" value="Enviar Comentario">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- END map -->
		<?php Estructura::getFooter(); ?>
	</div>
	<!-- END: box-wrap -->
	<?php Estructura::getScript(); ?>
	</body>
</html>
