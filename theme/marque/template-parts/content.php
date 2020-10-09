<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>



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
						the_title('<h1>', '</h1>');
					else :
						the_title('<h2 class="title-lg"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
					endif;

					if ('post' === get_post_type()) :
						?>

					<?php endif; ?>

				</div> <!-- .descrption-title -->

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
				<div class="single-excerpt text-md">

					<?php

					the_excerpt(); ?>


				</div><!-- .entry-content -->
	
				<div class="row">
					<div class="col-lg-6">
						<div class="bottom-bar"></div>
					</div><!-- .col -->
				</div><!-- .row -->
			</div><!-- .col -->
		</div><!-- .row -->
	</div><!-- .post-entry-container -->

</article><!-- #post-<?php the_ID(); ?> -->