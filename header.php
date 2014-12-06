<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package feed
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/leaflet.css">

<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site container">

	<div class="row">
	<header id="masthead" class="col-md-3 col-md-offset-1 site-header" role="banner">
		<div class="site-branding">
			<img src="http://gravatar.com/avatar/17f37be7dfd491b7b442a79f69e08f16?s=48" alt="Prateek Saxena">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	</header><!-- #masthead -->

	<div id="content" class="col-md-7 site-content">
