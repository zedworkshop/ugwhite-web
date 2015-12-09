<?php snippet('header') ?>

  	<main class="main" role="main">

	  	<!-- Hero -->
		<section class="[ border-box center bg-cover cushion-top-lg cushion-bottom-lg ] [ flex flex-center ] home-hero">

			<div class="col-12 md-col-6 px2 mx-auto">
				<div class="sm-show sm-col-4 xl-col-4 mx-auto mb2">
					<img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/UGW-logo-tri-rust.png') ?>" />
				</div>

				<div class="px2 home-tagline">
					<img alt="We've got the goods to get you there!" src="<?php echo url('assets/images/home-hero-tagline.png') ?>" />
				</div>
			</div>

		</section>
		<!--// Hero -->

		<!-- About -->
		<section class="[ bg-rust py2 ] home-intro">

			<div class="[ container px2 ] [ center white ]">

				<header class="py1 home-since">
					<img alt="Since 1917" src="<?php echo url('assets/images/home-since.png') ?>" />
					<h2 class="mt3">At U.G. White, we pride ourselves <br />in offering quality goods <br />with the best possible customer service.</h2>
					<img alt="" src="<?php echo url('assets/images/home-bird.png') ?>" />
				</header>

				<div class="clearfix py3">

					<header>
						<h3 class="banner banner-md banner-sand mt0 mb3"><span class="text wisdom">Our Provisions</span></h3>
					</header>

					<div class="col col-6 lg-col-3 px2">
						<ul class="[ fairview h3 uppercase ] list-reset">
							<li>Aladdin Oil Lamps</li>
							<li>Badger Balms &amp; Oinments</li>
							<li>Colonel Littleton Products</li>
							<li>Droll Yankee Bird Feeders</li>
							<li>Fits Socks</li>
							<li>Mojo</li>
							<li>Swiss Army Knives</li>
							<li>Troutman Rockers</li>
							<li>Camping &amp; Trail Supplies</li>
							<li>Canning &amp; Preserving</li>
							<li>Colonial Candles</li>
						</ul>
					</div>
					<div class="col col-6 lg-col-3 px2">
						<ul class="[ fairview h3 uppercase ] list-reset">
							<li>Galvanized Wares</li>
							<li>Kitchen Cutlery</li>
							<li>Lanterns</li>
							<li>Local Honey</li>
							<li>Jams &amp; Jellies</li>
							<li>Old-fashioned Candy</li>
							<li>Pottery Churns</li>
							<li>Tin &amp; Wood Signs</li>
							<li>Traditional Housewares</li>
							<li>Walking Sticks</li>
							<li>Wood &amp; Tin Toys</li>
						</ul>
					</div>

					<div class="col col-12 lg-col-6">

						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Case logo" src="<?php echo url('assets/images/logo-case.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Filson logo" src="<?php echo url('assets/images/logo-filson.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Patagonia logo" src="<?php echo url('assets/images/logo-patagonia.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Tilley logo" src="<?php echo url('assets/images/logo-tilley.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Woolrich logo" src="<?php echo url('assets/images/logo-woolrich.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Grand Trunk logo" src="<?php echo url('assets/images/logo-grandtrunk.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Radio Flyer logo" src="<?php echo url('assets/images/logo-radioflyer.png') ?>" />
						</figure>
						<figure class="px2 py1 m0 inline-block middle">
							<img alt="Lodge logo" src="<?php echo url('assets/images/logo-lodge.png') ?>" />
						</figure>

						<p class="futura mt2 h6">and many more fine products...</p>

					</div>
				</div>
			</div>

		</section>
		<!-- About -->

		<!-- Locations -->
		<section class="[ bg-alt-3 ] home-locations">

			<div class="[ container-wide ] [ center white ]">

				<div class="clearfix">

					<div class="col col-12 xl-col-right xl-col-5 px2 py3">

						<header class="py1 center">
							<h5 class="banner banner-forest mb0 mt0"><span class="text wisdom">Visit us in store</span></h5>
						</header>

						<div class="center clearfix mb2">

							<div class="sm-col sm-col-6 lg-col-4 xl-col-6 px2 py1">
								<h4 class="sunbeam uppercase futura h3 bold mb0 mt0">Athens</h4>
								<p class="mb0 futura h6">101 North Jefferson Street</p>
								<p class="xsmall">
									Monday - Wednesday, 9am - 6pm<br />
									Thursday - Saturday, 9am - 8pm
								</p>
							</div>

							<div class="sm-col sm-col-6 lg-col-4 xl-col-6 px2 py1">
								<h4 class="sunbeam uppercase futura h3 bold mb0 mt0">Huntsville</h4>
								<p class="mb0 futura h6">115 Clinton Ave E</p>
								<p class="xsmall">
									Monday - Wednesday, 10am - 6pm<br />
									Thursday - Saturday, 10am - 8pm<br />
									Sunday, 1pm - 6pm
								</p>
							</div>

						</div>

						<a href="<?php echo url('our-history') ?>" class="btn btn-fancy btn-rust btn-lg">Learn about the history of our stores</a>

					</div>

					<div class="[ mx-auto md-col-8 xl-col xl-col-7 ] home-photo">

						<figure class="photo curled tilted">
							<img alt="UG White Athens storefront" src="<?php echo url('assets/images/img-exterior.jpg') ?>" />
						</figure>

					</div>

				</div>
			</div>

		</section>

  	</main>

<?php snippet('footer') ?>