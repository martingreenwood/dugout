<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dugout
 */

?>
<!--
Built by Martin Greenwood
Lead Developer @WEAREBEARD
-->
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBXVB6X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				
				<div class="site-branding columns three">
					<img src="<?php the_field( 'logo', 'options' );?>" alt="">
				</div>

				<nav id="site-navigation" class="main-navigation columns nine">
					<button class="menu-toggle hamburger hamburger--squeeze" aria-controls="primary-menu" aria-expanded="false" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>

			</div>
		</div>
	</header>

	<div id="content" class="site-content">
