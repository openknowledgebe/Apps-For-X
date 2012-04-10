<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta property="og:image" content="http://appsforghent.be/wp-content/uploads/2012/03/appsforghent-fb.png" />

<title>



<?php bloginfo('name'); ?>

<?php if(is_home()) { ?>

 - <?php bloginfo('description'); ?>

<?php } ?>

<?php if(is_single()) { ?>

<?php wp_title(); ?>

<?php } ?>

<?php if(is_404()) { ?>

 - Pagina niet gevonden

<?php } ?>

<?php if(is_search()) { ?>

 - Zoekresultaten voor: <?php echo wp_specialchars($s, 1); ?>

<?php } ?>



</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script src="<?php bloginfo('template_directory'); ?>/js/tabcontent.js" type="text/javascript"></script>



<?php wp_head(); ?>



</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=114204621947233";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="container">



<!-- ^^^^^^^^^^^^^^ header code ^^^^^^^^^^^^^^ -->

<div id="header">

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>




	<div id="searchform">

	<form method="get" action="<?php bloginfo('url'); ?>/">

	<fieldset>

	<input type="text" value="<?php the_search_query(); ?>" name="s" id="searchinput" />

	<input type="submit" value="OK" id="searchbutton" />

	</fieldset>

	</form>

	</div>



	<div id="logo">

	<h1 id="site-title"><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

	</div>

	<!--<div id="ghentwebvalley"><a target="_blank" title="Ghent Web Valley" href="http://ghentwebvalley.be/"><img title="Ghent Web Valley" alt="Ghent Web Valley" src="<?php bloginfo('template_directory'); ?>/images/ghentwebvalley.png" /></a></div>-->



</div>

<div class="clear"></div>

<!-- ^^^^^^^^^^^^^^ header code ^^^^^^^^^^^^^^ -->