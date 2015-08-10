<nav role="navigation">

	<?php if(!$page->isHomePage()): ?>
	<a class="btn" href="<?php echo url() ?>">Home</a> &middot;
	<?php endif; ?>
	<?php foreach($pages->visible() as $p): ?>
	<a class="btn" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a> &middot;
	<?php endforeach ?>
	<span class="inline-block middle bold px2 sunbeam"><span class="sm-show-inline">Call us at</span> (256) 232-4540</span>

</nav>
