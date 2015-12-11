<nav role="navigation">

	<?php if(!$page->isHomePage()): ?>
	<a class="btn" href="<?php echo url() ?>">Home</a> &middot;
	<?php endif; ?>
	<?php foreach($pages->visible() as $p): ?>
	<a class="btn" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a> &middot;
	<?php endforeach ?>

	<div class="inline-block middle bold px2 sunbeam">
		<span class="inline-block">
			<span class="sm-show"><a class="sunbeam" href="https://www.google.com/maps/place/101+N+Jefferson+St,+Athens,+AL+35611/@34.8035306,-86.974716,17z/data=!3m1!4b1!4m2!3m1!1s0x88628b5d4d630759:0x4b1bc01ca5938d10?hl=en" target="_blank">Athens</a></span> (256) 232-4540
		</span>
	</div>

	<div class="inline-block middle bold px2 sunbeam">
		<span class="inline-block">
			<span class="sm-show"><a class="sunbeam" href="https://www.google.com/maps/place/U+G+White+Mercantile/@34.731903,-86.5884407,17z/data=!3m1!4b1!4m7!1m4!3m3!1s0x88626b56b2d0891b:0x1459ac70b89e9191!2s115+Clinton+Ave+E,+Huntsville,+AL+35801!3b1!3m1!1s0x88626b56b2d0891b:0x8699ecc4c9a5a8ee?hl=en" target="_blank">Huntsville</a></span> (256) 907-1917
		</span>
	</div>

</nav>
