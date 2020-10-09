<?php

/**
 * Template part for displaying page content in portfolio.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class("grid-item col-12 col-md-6 col-lg-4 margin-bottom hvr-grow"); ?>>

	<a href="<?php the_permalink(); ?>" class="portfolio-item-link">

		<div class="portfolio-thumb-container">
			<?php marque_post_thumbnail(); ?>

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

	</a>
</article><!-- #post-<?php the_ID(); ?> -->
