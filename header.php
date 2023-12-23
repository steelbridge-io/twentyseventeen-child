<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class('site-staff-area'); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="site-staff-area-navigation">
				<div class="wrap">
          <div class="back-link header-left">
            <a href="https://c5connections.org"><i class="fas fa-long-arrow-alt-left"></i> Parent Area</a>
          </div>
          <div class="logo-area header-center">
            <img src="https://c5connections.org/wp-content/themes/wordplate/img/xx-c5-childrens-school-logo.png" alt="c5-logo">
          </div>
          <div class="header-right">

          </div>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">

