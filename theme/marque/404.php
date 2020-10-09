<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package marque
 */

get_header();
?>
<div class="container-fluid padding-top">


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">

					<section class="error-404 not-found">

						<div class="row">
							<div class="col-md-10 mx-auto">
								<header class="page-header">
									<h1 class="page-title title-xxl"><?php esc_html_e('404', 'marque'); ?></h1>
								</header><!-- .page-header -->
								<div class="row">
									<div class="col-lg-12 mx-auto">
										<div class="bottom-bar"></div>
									</div><!-- .col -->
								</div><!-- .row -->
								<div class="page-content">
									<div class="text-lg">
										<p><?php esc_html_e('We\'e sorry, we cant find what you are looking for. Maybe you would like to check out some of our posts.', 'marque'); ?>
										</p>
									</div><!-- .text-lg -->
									<div class="text-s"><?php

														the_widget('WP_Widget_Recent_Posts');
														?></div><!-- .text-s -->



								</div><!-- .page-content -->

							</div><!-- .col -->
						</div><!-- .row -->
					</section><!-- .error-404 -->

				</div><!-- .col -->

			</div><!-- .row -->

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .container -->


<?php
get_footer();
