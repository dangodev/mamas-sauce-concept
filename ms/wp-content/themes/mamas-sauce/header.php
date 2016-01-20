<?php
global $site_url;
global $template_url;
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title><?php	if(is_front_page()) : ?><?php
				elseif(is_home()) : ?>Blog • <?php
				elseif(is_archive()) : wp_title(' Archive', true, 'right') ?> | <?php
				else : wp_title(''); ?> • <?php endif;?><?php bloginfo('name') ?>: <?php bloginfo('description') ?></title>
<meta property="og:title" content="<?php wp_title('', true) ?>">
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta property="og:image" content="<?= get_featured_image_src($post->ID) ?>">
<meta property="fb:app_id" content="606174649467343">
<?php wp_head() ?>
<script type="text/javascript" src="//use.typekit.net/znk2trq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<link rel="stylesheet" href="<?= $template_url ?>/css/application.css">
<link rel="shortcut icon" href="<?= $site_url ?>/favicon.ico">
<link rel="apple-touch-icon" href="<?= $template_url ?>/mamassauce-apple-touch.png">
</head>

<body <?php body_class() ?>>
<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=606174649467343";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<main class="main">
<header class="header header--main">
	<div class="wrapper">
		<div class="row">
			<div class="grid-box grid-box--desk--1of4">
  			<a class="header-logo" href="<?= $site_url ?>"><img src="<?= $template_url ?>/img/mamassauce.svg" alt="Mama’s Sauce"></a>
			</div>
			<div class="grid-box grid-box--desk--3of4 grid--right">
				<nav class="nav nav--primary">
				  <?php wp_nav_menu(array('container' => null, 'menu_class' => 'menu', 'theme_location' => 'primary')) ?>
				</nav>
			</div>
		</div>
  </div>
</header>
