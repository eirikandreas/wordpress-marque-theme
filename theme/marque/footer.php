<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marque
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="container-fluid footer-position">

		<div class="row">
			<div class="col-10 mx-auto">
				<aside id="footer-sidebar" class="widget-area">

					<?php dynamic_sidebar('footerbar'); ?>

				</aside><!-- #secondary -->
			</div><!-- .col -->
		</div><!-- .row -->

		<div class="row">
			<div class="col-md-12 mx-auto">

				<div class="footer-menu">
					<?php wp_nav_menu(array(
						'menu'           => 'menu-1', // Do not fall back to first non-empty menu.
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false // Do not fall back to wp_page_menu()
					)); ?>
				</div><!-- .footer-menu -->

			</div><!-- .col -->

		</div><!-- .row -->
		<div class="row">

			<div class="col-md-12">
				<div class="site-info text-s">
					<a href="<?php echo esc_url(__('https://wordpress.org/', 'marque')); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf(esc_html__('Proudly powered by %s', 'marque'), 'WordPress');
						?>
					</a>

					<a href="<?php echo esc_url(__('http://www.underscores.me/', 'marque')); ?>">
						<?php
						printf(esc_html__('and built with Underscores', 'marque'), 'marque');
						?>
					</a>

					<br>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf(esc_html__('Theme: %1$s %2$s.', 'marque'), 'marque', 'CMS OPPGAVE 2019');
					?>
				</div><!-- .site-info -->
			</div> <!-- .col -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	mobileBtn = document.getElementById("button-toggler");
	mobileBtn.addEventListener("click", mobileToggler);

	function mobileToggler() {
		if (mobileBtn.innerHTML == '<i class="material-icons">close</i>') {
			mobileBtn.innerHTML = '<i class="material-icons">menu</i>';
		} else {
			mobileBtn.innerHTML = '<i class="material-icons">close</i>';
		}
	}
</script>

</body>

</html>