<nav role="navigation">

	<?php if(!$page->isHomePage()): ?>
	<a class="btn" href="<?php echo url() ?>">Home</a> &middot;
	<?php endif; ?>
	<?php foreach($pages->visible() as $p): ?>
	<a class="btn" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a> &middot;
	<?php endforeach ?>

	<div class="inline-block middle bold px2 sunbeam">
		<span class="inline-block">
			<span class="sm-show">Athens</span> (256) 232-4540
		</span>
	</div>

	<div class="inline-block middle bold px2 sunbeam">
		<span class="inline-block">
			<span class="sm-show">Huntsville</span> (256) 907-1917
		</span>
	</div>

</nav>
