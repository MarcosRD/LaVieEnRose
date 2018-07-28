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
			<?php Estructura::getMenu(2); ?>
			<!-- END: header -->
			<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
				<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/intro.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 float-overlay">
								<h2>Nuestros Productos</h2>
								<h3>Contamos con una variedad de diseños.</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END fh5co-intro-section -->
			<div id="fh5co-product-section">
				<div class="container">
					<div class="row">
						<div class="product-inner">
							<div class="col-md-4 animate-box">
								<div class="desc">
									<h3><a href="#">Canastas</a></h3>
									<p>Contamos con una variedad de diseños de canastas, para cualquier tipo de evento.</p>
									<p>Con excelentes precios</p>
								</div>
							</div>
							<div class="col-md-8 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/carrito.jpg" alt="product"></a>
								</figure>
							</div>
						</div>
						<div class="product-inner">
							<div class="col-md-4 col-md-push-8 animate-box">
								<div class="desc">
									<h3><a href="#">Cajas de regalo</a></h3>
									<p>Para las fiestas y salir de los regalos tipocos, ua de estas cajas pueden dejar sorprendido al festejado</p>
								</div>
							</div>
							<div class="col-md-8 col-md-pull-4 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/cajaBlanca1.jpg" alt="product"></a>
								</figure>
							</div>
						</div>
						<div class="product-inner">
							<div class="col-md-4 animate-box">
								<div class="desc">
									<h3><a href="#">Centos de mesa</a></h3>
									<p>Tenemos una variedad de increibles centros de mesa que pueden dejar sorprendidos a tus invitados y darles una vista espectacular a tus fiestas o eventos.</p>
								</div>
							</div>
							<div class="col-md-8 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/caja-rosasBlancas.jpg" alt="product"></a>
								</figure>
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
