<?php

/**
 * The template for displaying single portfolio item
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

	get_template_part('template-parts/content', 'portfolio-single');

	the_post_navigation();

	

endwhile; // End of the loop.
?>

</main><!-- #main -->
</div><!-- #primary -->
</div><!-- .col -->




</div><!-- .row -->
</div><!-- .container -->

<!-- </div> deleted div here -->
<?php  marque_booking() ?>
</div><!-- .container-fluid -->


<?php
get_footer();