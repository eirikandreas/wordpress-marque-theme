<?php

/**
 * The header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marque
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">


		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'marque'); ?></a>

		<header id="masthead" class="site-header header-black">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 custom-header">





						<div class="site-branding">
							<?php
							the_custom_logo();
							if (is_front_page() && is_home()) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
							endif;
							$marque_description = get_bloginfo('description', 'display');
							if ($marque_description || is_customize_preview()) :
								?>

							<?php endif; ?>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation">
							<button id="button-toggler" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
								<i class="material-icons">menu</i></button>
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'       => 'div',
								'container_class' => 'top-navigation',
								'container_id'    => '',
								'menu_class'      => 'menu-responsive',
								'menu_id'         => '',
							));
							?>
						</nav><!-- #site-navigation -->

					</div> <!-- .col -->
				</div> <!-- .row -->
			</div> <!-- .container -->
		</header><!-- #masthead -->


		<div id="content" class="site-content">