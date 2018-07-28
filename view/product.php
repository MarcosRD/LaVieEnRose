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
								<h2>Our Products</h2>
								<h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
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
									<h3><a href="#">Product Title</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
							<div class="col-md-8 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/product-2.jpg" alt="product"></a>
								</figure>
							</div>
						</div>
						<div class="product-inner">
							<div class="col-md-4 col-md-push-8 animate-box">
								<div class="desc">
									<h3><a href="#">Product Title</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
							<div class="col-md-8 col-md-pull-4 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/product-3.jpg" alt="product"></a>
								</figure>
							</div>
						</div>
						<div class="product-inner">
							<div class="col-md-4 animate-box">
								<div class="desc">
									<h3><a href="#">Product Title</a></h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
								</div>
							</div>
							<div class="col-md-8 animate-box">
								<figure>
									<a href="#"><img class="img-responsive" src="../assets/images/product-4.jpg" alt="product"></a>
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
