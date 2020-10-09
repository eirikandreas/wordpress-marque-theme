<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marque
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<div class="col-12 col-s-12 col-md-12 col-lg-5">
	<div class="sidebar-area">


		<aside id="secondary" class="widget-area">



			<div class="row">
				<?php dynamic_sidebar('sidebar-1'); ?>

			</div><!-- .row -->

		</aside><!-- #secondary -->



	</div><!-- .sidebar-area -->
</div><!-- .col -->