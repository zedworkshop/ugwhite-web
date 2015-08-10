<?php snippet('header') ?>

	<header class="container">
		<div class="px2 py4 center">

			<figure class="m0 mx-auto md-col-9 postcard curled">
				<img alt="" src="<?php echo url('assets/images/img-postcard.jpg') ?>" />
			</figure>

			<div class="blog-titling">
				<h1 class="banner banner-lg banner-rust mx-auto mt0 mb0">
					<span class="text wisdom sand"><?php echo $page->title()->html() ?></span>
				</h1>
			</div>

			<img class="mb1" alt="" src="<?php echo url('assets/images/img-star-forest.png') ?>" />

			<p class="caps futura sand-darker mb0">Writings and Observations <br />from the desk of
				<span class="block wisdom regular sentence h3">U.G. White</span>
			</p>
		</div>
	</header>

	<section class="[ container py2 cushion-bottom ] blog-articles">
		<div class="clearfix">

			<?php foreach($articles as $article): ?>

			<div class="md-col md-col-4 px3 mb4 center">
				<a href="<?php echo $article->url() ?>">
				<?php if($article->hasImages()) : ?>
					<figure class="m0">
						<?php echo thumb($article->files()->first(), array('width' => 400, 'height' => 300, 'crop' => true)); ?>
					</figure>
				<?php endif; ?>

					<h5 class="dark futura regular mt1 mb1"><?php echo $article->title()->html() ?></h5>
					<p class="mb0 futura regular sand-darker"><?php echo $article->date('F j, Y') ?></p>
				</a>
			</div>

			<?php endforeach ?>

		</div>
	</section>

<?php snippet('footer') ?>