<?php

/**
 * Template part for displaying page content in archive-portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("col-12 col-md-6 col-lg-4 margin-bottom hvr-grow"); ?>>

	<div class="portfolio-thumb-container">
		<?php if (has_post_thumbnail()) {
			$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
			echo '<div class="page-portfolio-image item-height-3" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
							<div class="overlay-dark">




							</div>
							</div>
';
		} ?>



		<div class="overlay">
			<div class="text">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
					?>

				<?php endif; ?>
			</div><!-- .text -->
		</div><!-- .overlay -->
	</div><!-- .portfolio-thumb-container -->

</article><!-- #post-<?php the_ID(); ?> -->