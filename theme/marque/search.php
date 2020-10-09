<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package marque
 */

get_header();
?>
<div class="container-fluid padding-top">
	<div class="row">
		<div class="col-12 col-lg-12">
			<section id="primary" class="content-area">
				<main id="main" class="site-main">

					<?php if (have_posts()) : ?>
						<div class="row">
							<div class="col-lg-10 mx-auto">
								<header class="page-title-header page-header">
									<h1 class="page-title title-lg">
										<?php
											/* translators: %s: search query. */
											printf(esc_html__('Search Results for: %s', 'marque'), '<span>' . get_search_query() . '</span>');
											?>
									</h1>

									<div class="row">
										<div class="col-lg-12 mx-auto">
											<div class="bottom-bar"></div>
										</div><!-- .col -->
									</div><!-- .row -->
								</header><!-- .page-header -->
							</div><!-- .col -->
						</div><!-- .row -->
					<?php
						/* Start the Loop */
						while (have_posts()) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part('template-parts/content', 'search');

						endwhile;

						the_posts_navigation();

					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>

				</main><!-- #main -->
			</section><!-- #primary -->
		</div><!-- .col -->

	</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
