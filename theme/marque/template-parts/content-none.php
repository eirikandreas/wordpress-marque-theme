<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package marque
 */

?>
<div class="container-fluid padding-top">
	<section class="no-results not-found vh-full">
		<div class="row">
			<div class="col-12 col-lg-10 mx-auto">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Nothing Found', 'marque'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<?php
					if (is_home() && current_user_can('publish_posts')) :

						printf(
							'<p>' . wp_kses(
								/* translators: 1: link to WP admin new post page. */
								__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'marque'),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							) . '</p>',
							esc_url(admin_url('post-new.php'))
						);

					elseif (is_search()) :
						?>

						<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'marque'); ?>
						</p>
					<?php
						get_search_form();

					else :
						?>

						<p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'marque'); ?>
						</p>
					<?php
						get_search_form();

					endif;
					?>
				</div><!-- .page-content -->
			</div><!-- .col -->
		</div><!-- .row -->
	</section><!-- .no-results -->
</div><!-- .container-fluid -->