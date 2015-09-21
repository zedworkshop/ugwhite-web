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


				<a name="form"></a>

            <div class="clearfix py2">
                <div class="md-col-8 mx-auto px2">

                <form action="<?php echo $page->url()?>#form" method="post" autocomplete="off">                

					<?php if ($form->hasMessage()): ?>
					    <p class="px2 py1 white <?php e($form->successful(), 'bg-green' , 'bg-red')?>">
					        <?php $form->echoMessage() ?>
					    </p>
					<?php endif; ?>

					<div class="clearfix mxn2 mb3">
						<div class="col col-6 px2">
							<label for="org" class="required">Name of your organization or event</label>
							<input class="block col-12 field<?php e($form->hasError('org'), ' is-error')?>" type="text" name="org" id="org" value="<?php $form->echoValue('org') ?>"/>
						</div>

						<div class="col col-6 px2">
							<label for="name" class="required">Contact Name</label>
							<input class="block col-12 field<?php e($form->hasError('name'), ' is-error')?>" type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>"/>
						</div>
					</div>

					<div class="clearfix mxn2 mb3">
						<div class="col col-6 px2">
							<label for="phone" class="required">Contact Phone</label>
							<input class="block col-12 field<?php e($form->hasError('phone'), ' is-error')?>" type="text" name="phone" id="phone" value="<?php $form->echoValue('phone') ?>"/>
						</div>

						<div class="col col-6 px2">
							<label for="email" class="required">Contact Email</label>
							<input class="block col-12 field<?php e($form->hasError('_from'), ' is-error')?>" type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>"/>
						</div>
					</div>

					<div class="mb3">
						<label for="description">Describe your event, charity, or organization</label>
				    	<textarea name="description" id="description" class="block col-12 field<?php e($form->hasError('description'), ' is-error')?>"><?php $form->echoValue('description') ?></textarea>
				    	<p class="xsmall dark-grey mt1 mb0">It's fine to include a link to your website here, instead of retelling your story, if you feel confident it contains actionable information.</p>
					</div>

					<div class="mb3">
						<label for="involvement">How might we be involved?</label>
				    	<textarea name="involvement" id="involvement" class="block col-12 field<?php e($form->hasError('involvement'), ' is-error')?>"><?php $form->echoValue('involvement') ?></textarea>
				    	<p class="xsmall dark-grey mt1 mb0">Please be very specific.</p>
					</div>

					<div class="mb3">
						<label for="marketing">If you’re are producing an event, how are partners/sponsors/donors included in your marketing and in your event?</label>
				    	<textarea name="marketing" id="marketing" class="block col-12 field<?php e($form->hasError('marketing'), ' is-error')?>"><?php $form->echoValue('marketing') ?></textarea>
					</div>

					<div class="mb3">
						<label for="donations">If you are asking for a donation, please explain exactly how the funds will be used. If you recognize donors publicly, how do you do so?</label>
				    	<textarea name="donations" id="donations" class="block col-12 field<?php e($form->hasError('donations'), ' is-error')?>"><?php $form->echoValue('donations') ?></textarea>
					</div>


				    <label class="uniform__potty" for="website">Please leave this field blank</label>
				    <input type="text" name="website" id="website" class="uniform__potty" />

				    <button class="btn btn-primary" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

				</form>

                </div>
            </div>
        </div>
    </main>

<?php snippet('footer') ?>
