<?php snippet('header') ?>

<main class="main page-default" role="main">

	<div class="container mb4">
		<header class="px2 center mt2 cushion-top-sm cushion-bottom-sm">
			<h1 class="banner banner-lg banner-rust mx-auto mt0 mb0">
				<span class="text wisdom sand"><?php echo $page->title()->html() ?></span>
			</h1>
		</header>

		<div class="clearfix py2">
			<div class="md-col-8 mx-auto px2">
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</div>
	</div>

</main>

<?php snippet('footer') ?>