<?php

/**
 * Template name: Frontpage
 *
 * This template displays the frontpage.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'frontpage');

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->



<script>
	$(".site-header").removeClass("header-black");
	$(window).scroll(function() {
		if ($(".site-header").offset().top > 680) {

			$(".site-header").addClass("header-scroll-black");
		} else {
			$(".site-header").removeClass("header-scroll-black");
		}
	});
</script>
<?php
get_footer();
