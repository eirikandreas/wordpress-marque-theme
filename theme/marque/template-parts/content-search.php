<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>



<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="post-feed-container">
				<div class="row">
					<div class="post-feed-image col-8 col-lg-8 hvr-grow">


						<?php if (has_post_thumbnail()) {
							$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);

							echo '<div class="post-feed-thumb" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
		<div class="overlay-dark"></div>
		</div>';
						} ?>
					</div><!-- .col -->
				</div><!-- .row -->

				<div class="row">
					<div class="col-md-10 mx-auto">
						<div class="post-feed-title">

							<?php
							if (is_singular()) :
								the_title('<h1 class="title-lg">', '</h1>');
							else :
								the_title('<h2 class="title-lg"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
							endif;

							if ('post' === get_post_type()) :
								?>

							<?php endif; ?>

						</div><!-- .descrption-title -->

					</div><!-- .col -->
				</div><!-- .row -->

			</div><!-- .post-feed-container -->

			<div class="post-entry-container">

				<div class="row">

					<div class="col-lg-10 mx-auto">

						<div class="entry-meta">
							<?php
							marque_posted_on();
							marque_posted_by();
							?>
						</div><!-- .entry-meta -->

					</div><!-- .col -->

					<div class="col-lg-10 mx-auto">
						<div class="single-excerpt">

							<?php
							the_content(sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'marque'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							));

							wp_link_pages(array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'marque'),
								'after'  => '</div>',
							));
							?>
						</div><!-- .entry-content -->

						<div class="row">
							<div class="col-lg-4">
								<div class="bottom-bar"></div>
							</div><!-- .col -->
						</div><!-- .row -->
					</div><!-- .col -->
				</div> <!-- .row -->
			</div><!-- .post-entry-container -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</main><!-- #main -->
</div><!-- #primary -->