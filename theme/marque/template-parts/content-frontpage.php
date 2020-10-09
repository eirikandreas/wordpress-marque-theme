<?php

/**
 * Template part for displaying page content in frontpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>


<div class="frontpage-header">

	<div class="header-image">

		<?php
		$marque_portfolio_per_page = array(
			'post_type'  => 'portfolio',
			'posts_per_page' => 1,
			'orderby'        => 'rand'
		);

		$marque_portfolio_query = new WP_Query($marque_portfolio_per_page); // 
		while ($marque_portfolio_query->have_posts()) : $marque_portfolio_query->the_post();
			?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<?php if (has_post_thumbnail()) {
						$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
					} ?>

				<div class="header-bg portfolio-item" style="background-image:url(<?php echo (($marque_portfolio_thumb[0])) ?>);">

					<div class="overlay-dark-2">

						<div class="container-fluid">
							<div class="row">

								<div class="header-title col-12 col-lg-10 mx-auto" data-parallax="scroll">
									<h1 class="title-xl"><?php printf(get_bloginfo('description')); ?></h1>
								
									<?php $marque_header_url = get_option('marque_header_panel_button'); 	?>
										<?php  $marque_header_btn_value = get_option('marque_header_panel_value'); ?>
								
							<div class="header-button"><a href="<?php echo $marque_header_url ?>" class="square-btn-header hvr-bounce-to-right"><?php echo $marque_header_btn_value ?></a></div>
								</div><!-- .header-title -->

							</div><!-- .row -->
						</div><!-- .container-fluid -->

					</div><!-- .overlay-dark-2 -->

				</div><!-- .post col -->

			<?php endwhile; ?>

			<?php wp_reset_postdata(); // reset the query 
			?>

			</div><!-- .header-image -->

	</div><!-- .container -->

</div><!-- .description-image .col -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 mx-auto">

		</div><!-- .col -->
	</div><!-- .row -->

</div><!-- .frontpage-description -->
</div><!-- .container-fluid -->

<div class="frontpage-content text-lg">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-10 mx-auto">
				<?php
				the_content();

				wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'marque'),
					'after'  => '</div>',
				));
				?>


				<div class="row">
					<div class="col-lg-12 mx-auto">
						<div class="bottom-bar"></div>
					</div><!-- .col -->
				</div><!-- .row -->

			</div><!-- .col -->
		</div><!-- .row -->

	</div><!-- .container-fluid -->
</div><!-- .frontpage-content -->

<div class="container-fluid">

	<section class="frontpage-portfolio">

		<div class="row">
			<div class="front-heading col-md-10 mx-auto">

			<?php $displayPortfolioHeading = get_option('display_portfolio_front_heading'); ?>

				<h1 class="title-lg"><?php echo $displayPortfolioHeading; ?></h1>
			</div><!-- .col -->
		</div><!-- .row -->

		<div class="row">

			<?php

			$marque_portfolio_count = get_option('front_portfolio_count');

			$marque_portfolio_per_page = array(
				'post_type'  => 'portfolio',
				'posts_per_page' => 1

			);

			$marque_portfolio_query = new WP_Query($marque_portfolio_per_page); // 
			while ($marque_portfolio_query->have_posts()) : $marque_portfolio_query->the_post();
				?>

				<div <?php post_class("col-12 col-lg-7 margin-bottom hvr-grow"); ?> id="post-<?php the_ID(); ?>">

					<a href="<?php the_permalink(); ?>" class="portfolio-item-link">

						<div class="portfolio-thumb-container">
							<?php if (has_post_thumbnail()) {
									$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
									echo '<div class="page-header-image-2 item-height-1" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
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

					</a>


				</div><!-- .post col -->

			<?php endwhile; ?>


			<?php wp_reset_postdata(); // reset the query 
			?>
			
			<div class="col-lg-5">
				<div class="row">

					<?php

					$marque_portfolio_per_page = array(
						'post_type'  => 'portfolio',
						'posts_per_page' => 2,
						'offset' => 1
					);

					$marque_portfolio_query = new WP_Query($marque_portfolio_per_page); // 
					while ($marque_portfolio_query->have_posts()) : $marque_portfolio_query->the_post();
						?>

						<div <?php post_class("item-height-2 portfolio-item-height col-12 col-md-12 col-lg-12 margin-bottom hvr-grow"); ?> id="post-<?php the_ID(); ?>">


							<a href="<?php the_permalink(); ?>" class="portfolio-item-link">

								<div class="portfolio-thumb-container">
									<?php if (has_post_thumbnail()) {
											$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
											echo '<div class="page-header-image-2 item-height-2" style="background-image:url(' . $marque_portfolio_thumb[0] . '">
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

							</a>


						</div><!-- .post col -->

					<?php endwhile; ?>

					<?php wp_reset_postdata(); // reset the query 
					?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">



				<div class="row">
					<div class="col-12 col-lg-10 mx-auto">


					<?php  $portfolio_url = get_option('portfolio_url'); ?>
						<div class="button-cont"><a href="<?php echo $portfolio_url; ?>" class="square-btn-header hvr-bounce-to-right">View Portfolio</a></div>

					</div>
				</div>



			</div><!-- .view-more-box -->
		</div><!-- .col -->


	</section><!-- .frontpage-portfolio -->

</div><!-- .container-fluid -->


<section class="frontpage-blog">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

				<div class="row">
					<div class="front-heading col-md-10 mx-auto">
					<?php  $displayBlogHeading = get_option('display_blog_front_heading'); ?>
						<h1 class="title-lg"><?php echo $displayBlogHeading; ?></h1>
					</div><!-- .col -->
				</div><!-- .row -->


				<div class="front-blog-posts">
					<div class="row">


						<?php
						$marque_blog_count = get_option('front_post_count');

						$marque_post_per_page = array(
							'posts_per_page' => $marque_blog_count
						); ?>

						<?php $marque_blog_query = new WP_Query($marque_post_per_page);
						while ($marque_blog_query->have_posts()) : $marque_blog_query->the_post(); ?>
							<div class="col-lg-10 mx-auto">

								<div <?php post_class("front-post"); ?> id="post-<?php the_ID(); ?>">


									<?php if (has_post_thumbnail()) {
											$marque_portfolio_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
										} ?>

									<div class="front-post-thumb" style="background-image:url(<?php echo (($marque_portfolio_thumb[0])) ?>);"></div>

									<div class="front-post-content">

										<h2 class="front-post-title title-md"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="front-post-entry text-md">
											<p><?php the_excerpt(); ?></p>
										</div><!-- .front-post-entry -->
									</div><!-- .front-post-content -->

								</div><!-- .front-post -->
								<div class="row">
									<div class="col-lg-6">
										<div class="bottom-bar"></div>
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .col -->

						<?php endwhile; ?>

						<?php wp_reset_postdata(); // reset the query 
						?>

					</div><!-- .row -->

					<div class="row">
						<div class="col-12 col-lg-10 mx-auto">
							<?php $marque_blog_url = get_option('blog_url'); ?>
							<div class="button-cont"><a href="<?php echo $marque_blog_url ?>" class="square-btn-header hvr-bounce-to-right">View Blog</a></div>
						</div><!-- .col -->
					</div><!-- .row -->

				</div> <!-- .col -->
			</div><!-- .row -->

		</div><!-- .container-fluid -->

		<!-- DELETED DIV	</div> -->

</section><!-- .frontpage-blog -->


<?php marque_booking() ?>