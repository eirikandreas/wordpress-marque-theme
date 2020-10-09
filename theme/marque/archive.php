<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

get_header();
?>
<div class="container-fluid padding-top">
	<div class="row">
		<div class="col-md-12">

			<?php if (have_posts()) : ?>
				<div class="row">
					<div class="col-12 col-lg-10 mx-auto">
						<header class="page-title-header page-header">


							<?php
								the_archive_title('<h1 class="page-title title-lg">', '</h1>');
								the_archive_description('<div class="archive-description">', '</div>');
								?>

							<div class="row">
								<div class="col-lg-12 mx-auto">
									<div class="bottom-bar"></div>
								</div><!-- .col -->
							</div><!-- .row -->
					</div><!-- .col -->
				</div><!-- .row -->
				</header><!-- .page-header -->


			<?php
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

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>

		</div><!-- .col -->



	</div><!-- .row -->
</div><!-- .container -->

<?php  marque_booking() ?>

<?php
get_footer();
