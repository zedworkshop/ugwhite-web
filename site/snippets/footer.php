	<footer class="[ bg-forest-light ] sitefooter" role="contentinfo">
		<div class="bg-forest py2">
			&nbsp;
		</div>
		<div class="container">
			<div class="clearfix center">
				<div class="md-col md-col-5 md-left-align px2 py2">
					<p class="small white normal futura mb0 mt1">Copyright &copy; <?php echo date('Y') ?> U.G. White Mercantile</p>
					<p class="small white futura mb0">Athens - (256) 232-4540 &middot; Huntsville - (256) 907-1917</p>
				</div>

				<div class="md-show md-col md-col-2 mtn2 footer-logo">
					<img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/UGW-logo-duo-forest.png') ?>" />
				</div>

				<div class="md-col md-col-5 md-right-align px2 py2">
					<p class="small white normal futura mb0">
						<a class="btn small" href="<?php echo url() ?>">Home</a>
						<?php foreach($pages->visible() as $p): ?>
						<a class="btn small" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
						<?php endforeach ?>
					</p>
				</div>
			</div>
			<div class="clearfix">
				<div class="sm-col sm-col-12 center md-right-align px2">
					<ul class="list-reset mb0">
					  	<li class="inline-block px1">
					    	<a href="<?php echo $site->facebook() ?>" target="_blank" class="white">
					    		<svg class="icon-facebook icon-2x"><use xlink:href="#icon-facebook"></use></svg>
					    	</a>
					  	</li>
					  	<?php if(!$site->twitter()->empty()): ?>
					  	<li class="inline-block px1">
					    	<a href="<?php echo $site->twitter() ?>" target="_blank" class="white">
					    		<svg class="icon-twitter2 icon-2x"><use xlink:href="#icon-twitter2"></use></svg>
					    	</a>
					  	</li>
					  	<?php endif; ?>
					  	<?php if(!$site->instagram()->empty()): ?>
					  	<li class="inline-block px1">
					    	<a href="<?php echo $site->instagram() ?>" target="_blank" class="white">
					    		<svg class="icon-instagram icon-2x"><use xlink:href="#icon-instagram"></use></svg>
					    	</a>
					  	</li>
					  	<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>

  	<?php echo js('assets/js/main.js') ?>

</body>
</html>