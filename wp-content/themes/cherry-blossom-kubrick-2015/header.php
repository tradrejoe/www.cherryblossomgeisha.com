<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Kubrick 2014
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="margin: 0 !important;">
<!--img src="/img/top-illustration.gif" style="width: 100% !important;position:absolute !important;top:0px;left:0px;z-index:1 !important;">
<br/>
<div id="page" class="hfeed site"-->
<div class="top-image" style="background: url(<?php echo bloginfo('template_directory') ?>/images/top-illustration.gif) no-repeat center 0 !important;"></div>
<div id="wrapper">
<div id="header" style="background: url(<?php echo bloginfo('template_directory')?>/images/header.gif) no-repeat center bottom !important;">
			<div id="custom-header-img"><a href="/">
				<img src="<?php echo bloginfo('template_directory') ?>/images/cropped-cherryblossom.jpg" alt="" height="200" width="980" />
				<!--div class="header-video" style="width:980px !important;height:200px !important;">
						<video autoplay="" loop="" style="width:100% !important;height:200px !important;">	
							<source src="<?php echo bloginfo('template_directory')?>/videos/white_blossomed_tree.mp4" type="video/mp4">
							<source src="<?php echo bloginfo('template_directory')?>/videos/white_blossomed_tree.ogv" type="video/ogg">
							<source src="<?php echo bloginfo('template_directory')?>/videos/white_blossomed_tree.webm" type="video/webm">
						</video>
				</div-->
				</a>
			</div>

	<div id="nav">
		<ul class="menu page-menu">
			<li class="page_item current-menu-item"><a href="/">Home</a></li>
			<li class="page_item not-current-menu-item"><a href="/about">Glitter</a></li>
		</ul>
	</div>

		<form method="get" id="searchform" action="/">
		<input type="text" value="Search..." name="s" id="s" />
		<input type="submit" value="Search" id="searchsubmit" />
	</form></div>

	<!--header id="masthead" class="site-header" role="banner">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	</header--><!-- #masthead -->

	<div id="content" class="site-content">