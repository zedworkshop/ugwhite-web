<?php snippet('header') ?>

  	<main class="main" role="main">

		<div class="about-hero">
			<div class="container px3 cushion-top cushion-bottom">

				<div class="clearfix mb4">
					<!-- <h1 class="fairview uppercase white regular mt0 mb0">Our History</h1> -->
					<h1 class="banner banner-lg banner-rust mt0 mb0 right">
						<span class="text wisdom sand"><?php echo $page->title() ?></span>
					</h1>
				</div>

				<h4 class="md-col-7 mt0 mb0 white futura regular h2"><?php echo $page->summary() ?></h4>
			</div>
		</div>

		<!-- History -->
		<section class="bg-sand about-history">
			<div class="container">

				<div class="clearfix [ md-flex flex-end ]">

					<div class="md-col md-col-6 px2 cushion-top cushion-bottom">
						<h4 class="futura regular mb3 rust">As one of twelve children born to James Monroe "Bud" White and his bride Amanda Warren in the late 1800s, Ulysses Grant White created a business that has influenced Athens, Alabama for nearly a century.</h4>

						<p>Following a farming accident that cost him his right arm, the White Hollow, Tennessee native started U.G. White Hardware and Implement Co. on south Marion Street in 1917.</p>

						<p class="mb0">White supplied Athens's mercantile needs as well as briefly entering the burgeoning automotive service-station business. After twenty years White sought a more strategic location and in 1937 bought and remodeled the corner of 101 Jefferson Street.</p>
					</div>

					<div class="md-col-right md-col-6 px2">
						<figure class="m0 ml4 relative">
							<img alt="Ulysses Grant White" src="<?php echo url('assets/images/ug-white.png') ?>" class="block" />

							<p class="absolute top-0 right-0 futura regular mt4 col-5 md-col-6">
								Store founder <br />Ulysess Grant White
							</p>
						</figure>
					</div>
				</div>

			</div>
		</section>
		<!--// History -->

		<!-- Athens -->
		<section class="about-athens">
			<div class="container">

				<div class="clearfix py3 [ md-flex flex-center flex-justify ]">

					<div class="md-col md-col-6 px2 about-athens-img">
						<img alt="" src="<?php echo url('assets/images/img-exterior-2.jpg') ?>" />
					</div>

					<div class="md-col-right md-col-5 px2">
						<h4 class="futura uppercase regular forest">Athens</h4>

						<?php echo $page->athens()->kirbytext() ?>
					</div>
				</div>

			</div>
		</section>
		<!--// Athens -->

		<hr class="sm-hide" />

		<!-- Elkmont -->
		<section class="about-elkmont">
			<div class="container">

				<div class="clearfix py3 [ md-flex flex-center flex-justify ]">

					<div class="[ md-col-right md-col-6 px2 ] [ flex-last ] about-elkmont-img">
						<img alt="" src="<?php echo url('assets/images/img-interior.jpg') ?>" />
					</div>

					<div class="md-col md-col-5 px2">
						<h4 class="futura uppercase regular forest">Elkmont</h4>

						<?php echo $page->elkmont()->kirbytext() ?>
					</div>

				</div>

			</div>
		</section>
		<!--// Elkmont -->

		<hr class="sm-hide" />

		<!-- Huntsville -->
		<section class="about-huntsville mb4">
			<div class="container">

				<div class="clearfix py3 [ md-flex flex-center flex-justify ]">

					<div class="[ md-col md-col-6 ] px2 about-huntsville-img">
						<img alt="" src="<?php echo url('assets/images/img-merch.jpg') ?>" />
					</div>

					<div class="md-col-right md-col-5 px2">
						<h4 class="futura uppercase regular forest">Huntsville</h4>

						<?php echo $page->huntsville()->kirbytext() ?>
					</div>

				</div>

			</div>
		</section>
		<!--// Huntsville -->


  	</main>

<?php snippet('footer') ?>