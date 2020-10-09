<?php

/**
 * The template for single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marque
 */

get_header();
?>


<?php
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content', 'blog-single');

	the_post_navigation();

	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .col -->


<?php get_sidebar(); ?>
</div><!-- .row -->
</div><!-- .container -->
</div>

<!-- </div> deleted div here -->

</div><!-- .container-fluid -->

<?php  marque_booking() ?>

<?php
get_footer();