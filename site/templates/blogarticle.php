<?php snippet('header') ?>

	<header class="container">
		<div class="px2 py4 center mt4">

			<div class="blog-titling">
				<h1 class="banner banner-md banner-rust mx-auto mt0 mb0">
					<a href="<?php echo $page->parent()->url() ?>" class="text wisdom sand"><?php echo $page->parent()->title()->html() ?></a>
				</h1>
			</div>

			<img class="mb1" alt="" src="<?php echo url('assets/images/img-star-forest.png') ?>" />

			<p class="caps futura sand-darker mb0">Writings and Observations <br />from the desk of
				<span class="block wisdom regular sentence h3">U.G. White</span>
			</p>
		</div>
	</header>

	<section class="[ container mb4 ] blog-article">

	<?php if($page->hasImages()) : ?>
		<figure class="m0 mb3 center">
			<?php echo thumb($page->files()->first(), array('width' => 900)); ?>
		</figure>
	<?php endif; ?>

		<div class="clearfix">

			<div class="mx-auto md-col-7 px3 mb4">

				<header class="center mb3">
					<h1 class="[ fairview regular rust mt0 mb2 ] blog-title"><?php echo $page->title()->html() ?></h1>
					<p class="mb0 futura regular sand-darker"><?php echo $page->date('F j, Y') ?></p>
				</header>

				<?php echo $page->text()->kirbytext() ?>
			</div>

		</div>
	</section>

<?php snippet('footer') ?>