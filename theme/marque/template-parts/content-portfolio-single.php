<?php

/**
 * Template part for displaying single portfolio item.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<div class="container-fluid padding-top ">

	<div class="row">
		<div class="col-md-10 mx-auto text-center">

			<header class="single-post-header entry-header">
				<?php
				if (is_singular()) :
					the_title('<h1 class="single-post-title entry-title title-lg">', '</h1>');
				else :
					the_title('<h2 class="single-post-title entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif;

				if ('post' === get_post_type()) :
					?>

				<?php endif; ?>
			</header><!-- .entry-header -->

		</div><!-- .col -->
	</div><!-- .row -->

	<div class="row">
		<div class="col-md-10 mx-auto">

			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="row">
							<div class="col-12 col-md-12 text-center">

								<div class="portfolio-single-image">
									<?php marque_post_thumbnail(); ?>
								</div><!-- portfolio-single-image -->

							</div><!-- .col -->
						</div><!-- .row -->

						<div class="row">
							<div class="col-lg-12 mx-auto">
								<div class="bottom-bar"></div>
							</div><!-- .col -->
						</div><!-- .row -->


						<div class="row">
							<div class="col-md-4">
								<div class="portfolio-meta">
									<h6>Client:</h6>
									<p><?php echo get_post_meta($post->ID, 'client', true); ?></p>
									<h6>Location:</h6>
									<p><?php echo get_post_meta($post->ID, 'location', true); ?></p>
								</div><!-- .portfolio-meta -->
							</div><!-- .col -->

							<div class="col-md-8">

								<div class="entry-content">


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
							</div><!-- .row -->
						</div><!-- .col -->

						<footer class="entry-footer">
							<?php marque_entry_footer(); ?>
						</footer><!-- .entry-footer -->

					</article><!-- #post-<?php the_ID(); ?> -->