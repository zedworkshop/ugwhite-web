	<footer class="[ bg-forest-light ] sitefooter" role="contentinfo">
		<div class="bg-forest py2">
			&nbsp;
		</div>
		<div class="container">

			<div class="clearfix center">
				<div class="md-col md-col-5 md-left-align px2 py2">
					<p class="small white normal futura">Copyright &copy; <?php echo date('Y') ?> U.G. White Mercantile</p>
				</div>

				<div class="md-show md-col md-col-2 mtn2 footer-logo">
					<img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/UGW-logo-duo-forest.png') ?>" />
				</div>

				<div class="md-col md-col-5 md-right-align px2 py2 mb4">
					<p class="small white normal futura">
						<a class="btn small" href="<?php echo url() ?>">Home</a>
						<?php foreach($pages->visible() as $p): ?>
						<a class="btn small" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
						<?php endforeach ?>
					</p>
				</div>
			</div>
		</div>
	</footer>

  	<?php echo js('assets/js/main.js') ?>

</body>
</html>