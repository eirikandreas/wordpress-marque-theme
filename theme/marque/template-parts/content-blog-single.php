<?php

/**
 * Template part for displaying page content in blog.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<div class="container-fluid padding-top">

	<div class="row">
		<div class="col-12 col-md-12">

			<?php if (has_post_thumbnail()) {
				$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
				echo '							<div class="page-header-image" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
										

									
								';
			} ?>

			<div class="overlay-dark">

			

			</div> <!-- .overlay-dark -->

		</div> <!-- .page-header-image -->

	</div><!-- .col -->
</div><!-- .col -->

<div class="row">
	<div class="col-md-10 mx-auto">


	<div class="row">
		<div class="col-12">

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
			<div class="col-12 col-lg-7">



				<div id="primary" class="content-area">
					<main id="main" class="site-main">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="row">
								<div class="col-12 single-post-meta entry-meta">

									<div class="single-entry-meta">
										<?php
										marque_posted_on();
										marque_posted_by();
										?>

									</div><!-- .entry-meta -->

								</div><!-- .row -->

								<div class="col-12 col-s-12 col-md-12">
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

									<footer class="entry-footer">
										<?php marque_entry_footer(); ?>
									</footer><!-- .entry-footer -->

									<div class="row">
										<div class="col-lg-12 mx-auto">
											<div class="bottom-bar"></div>
										</div><!-- .col -->
									</div><!-- .row -->

								</div><!-- .col -->

								<div class="row">
									<div class="col-5">
										<div class="bottom-bar"></div>
									</div><!-- .col -->
								</div><!-- .row -->

						</article><!-- #post-<?php the_ID(); ?> -->