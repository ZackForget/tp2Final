<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding"> -->

		<!-- </div>.site-branding -->

		
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores' ); ?></button> -->
			<!-- <?php
			//wp_nav_menu( array(
			//	'theme_location' => 'menu-1',
			//	'menu_id'        => 'primary-menu',
			//) );
			
			
				?> -->


			<div id="content" class="site-content">
			
		<div id='containerBurger'>
			<div id="burger">
				<span id='btn1'></span>
				<span id='btn2'></span>
				<span id='btn3'></span>
			</div>
		</div>
	
	
	<nav id="site-navigation" class="main-navigation">
	
		<div id='divNav'>
			
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
			<a href='#'>Lorem ipsum</a>
		</div>


			
		
		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


