<?php

/**
 * Template name: Book Page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

get_header();
?>


<?php
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content', 'book');

	// If comments are open or we have at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .col -->



</div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
