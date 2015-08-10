<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/init.js') ?>

  <script>
        (function(d) {
            var config = {
                kitId: 'hdv3cdw',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

</head>
<body>

    <header class="[ top-0 left-0 full-width ] [ bg-forest px2 py2 ] sitenav">
        <div class="[ relative ] [ futura caps xsmall white center ] sitenav-inner">
            <a href="<?php echo url() ?>" class="logo">
                <img alt="<?php echo $site->title()->html() ?>" src="<?php echo url('assets/images/UGW-logo-tri-forest.png') ?>" />
            </a>

            <?php snippet('menu') ?>
         </div>
    </header>