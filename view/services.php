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
		<?php Estructura::getMenu(1); ?>
		<!-- END: header -->
		<div id="fh5co-intro-section" class="section-overlay animate-box" data-animate-effect="fadeIn">
			<div class="fh5co-intro-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/intro.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 float-overlay">
							<h2>Nuestros servicios</h2>
							<h3>Expertos en la decoración con flores para cualquier tipo de evento.</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END fh5co-intro-section -->
		<div id="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-heart"></i>
								<div class="holder-section">
									<h3>Crafted With Love</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-laptop"></i>
								<div class="holder-section">
									<h3>Web Developement</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-video"></i>
								<div class="holder-section">
									<h3>Video Editing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-mobile"></i>
								<div class="holder-section">
									<h3>Mobile Optimization</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-gears"></i>
								<div class="holder-section">
									<h3>Search Engine Optimization</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 animate-box">
							<div class="fh5co-inner fh5co-services">
								<i class="icon-piechart"></i>
								<div class="holder-section">
									<h3>Web Marketing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
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
