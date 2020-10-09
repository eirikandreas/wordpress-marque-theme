<?php

/**
 * The main template file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

get_header();
?>

<div class="container-fluid padding-top">
	<div class="row">
		<div class="col-12  col-lg-12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<?php
					if (have_posts()) :

						if (is_home() && !is_front_page()) :
							?>


							<div class="row">
								<div class="col-lg-10 mx-auto">
									<header class="page-title-header entry-header">
										<h1 class="page-title title-lg"><?php single_post_title(); ?></h1>
										<div class="row">
											<div class="col-lg-12 mx-auto">
												<div class="bottom-bar"></div>
											</div><!-- .col -->
										</div><!-- .row -->
								</div><!-- .col -->
								</header><!-- .entry-header -->

							</div><!-- .row -->

							<!-- DELETED </div> -->




					<?php
						endif;

						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
							get_template_part('template-parts/content', get_post_type());

						endwhile;


					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>
					<div class="row">
						<div class="col-12 col-lg-10 mx-auto">
							<div class="button-cont"><?php the_posts_navigation(); ?></div>

						</div><!-- .col -->
					</div><!-- .row -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div> <!-- .col -->



	</div> <!-- .row -->
</div> <!-- .container -->

<?php marque_booking() ?>

<?php
get_footer();
