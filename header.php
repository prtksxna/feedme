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

<link rel="me" href="https://twitter.com/prtksxna">
<link rel="me" href="https://github.com/prtksxna">
<link rel="me" href="https://plus.google.com/+PrateekSaxena17/about">

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
	<header id="masthead" class="col-md-3 col-md-offset-1 site-header h-card vcard" role="banner">
		<div class="site-branding">
			<img src="http://gravatar.com/avatar/<?php echo md5( get_option( 'admin_email', 'null' ) ); ?>?s=48" alt="<?php bloginfo( 'name' ); ?>" class="u-photo photo">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="p-name u-url fn url"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="col-md-7 site-content">
