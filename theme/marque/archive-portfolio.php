<?php
/**
 * The template for displaying portfolio archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

get_header();
?>


<?php if ( have_posts() ) : ?>

<div class="container-fluid padding-top">
	<div class="row">
		<div class="col-lg-10 mx-auto">

			<header class="page-title-header">

				<?php
				the_archive_title( '<h1 class="page-title title-lg">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="bottom-bar"></div>
					</div><!-- .col -->
				</div><!-- .row -->
			</header><!-- .page-header -->

		</div><!-- .col -->

	</div><!-- .row -->

</div><!-- .container -->

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container-fluid">

			<div class="row">

				<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive-portfolio' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

			</div><!-- .row -->

		</div><!-- .container -->

	<?php  marque_booking() ?>
	</main><!-- #main -->
</div><!-- #primary -->



<?php
get_footer();
