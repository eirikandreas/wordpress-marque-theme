<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<div class="container-fluid padding-top">

	<div class="row">
		<div class="col-lg-10 mx-auto">
			<header class="page-title-header entry-header">
				<?php the_title('<h1 class="page-title title-lg">', '</h1>'); ?>

				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="bottom-bar"></div>
					</div><!-- .col -->
				</div><!-- .row -->
			</header><!-- .entry-header -->

		</div><!-- .col -->

	</div><!-- .row -->

	<div class="page-image-header">

		<?php if (has_post_thumbnail()) {
			$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
			echo '<div class="page-header-image" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
							<div class="overlay-dark">




							</div>
							</div>
';
		} ?>


	</div> <!-- .page-image-header -->
	<div class="row center-text">
		<div class="col-md-10 mx-auto">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages(array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'marque'),
								'after'  => '</div>',
							));
							?>
						</div><!-- .entry-content -->

						<?php if (get_edit_post_link()) : ?>
							<footer class="entry-footer">
								<?php
									edit_post_link(
										sprintf(
											wp_kses(
												/* translators: %s: Name of current post. Only visible to screen readers */
												__('Edit <span class="screen-reader-text">%s</span>', 'marque'),
												array(
													'span' => array(
														'class' => array(),
													),
												)
											),
											get_the_title()
										),
										'<span class="edit-link">',
										'</span>'
									);
									?>
							</footer><!-- .entry-footer -->
						<?php endif; ?>
					</article><!-- #post-<?php the_ID(); ?> -->