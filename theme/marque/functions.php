<?php

/**
 * marque functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marque
 */

if (!function_exists('marque_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marque_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on marque, use a find and replace
		 * to change 'marque' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('marque', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'marque'),
			'menu-2' => esc_html__('Footer', 'marque')
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('marque_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'marque_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marque_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('marque_content_width', 640);
}
add_action('after_setup_theme', 'marque_content_width', 0);

/**
 * Register widget areas.
 * Standard Sidebar and a custom "footer bar".
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marque_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'marque'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'marque'),
		'before_widget' => '<div class="col-12"><section id="%1$s" class="widget-box widget %2$s">',
		'after_widget'  => '</section></div>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	));
}
add_action('widgets_init', 'marque_widgets_init');

function marque_footerbar_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Footer', 'marque'),
		'id'            => 'footerbar',
		'description'   => esc_html__('Add footer widgets here', 'marque'),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-12 col-lg-12">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}

add_action('widgets_init', 'marque_footerbar_init');

/**
 * Enqueue scripts and styles.
 */
function marque_scripts()
{
	wp_enqueue_style('marque-style', get_stylesheet_uri());

	//Enqueue Google Material Icons.
	wp_enqueue_style('marque-icon-css', 'https://fonts.googleapis.com/icon?family=Material+Icons');

	//Enqueue custom Bootstrap css.
	wp_enqueue_style('marque-bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');

	//Enqueue custom stylesheet specific for the theme.
	wp_enqueue_style('marque-custom-style', get_template_directory_uri() . '/custom.css');

	//Enqueue hover stylesheet.
	wp_enqueue_style('marque-hover-css', get_template_directory_uri() . '/css/hover.css');

	//Adds jQuery compatibility to the theme.
	wp_enqueue_script('marque-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');

	//Enqueue Bootstrap bundle js.
	wp_enqueue_script('marque-bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js');

	wp_enqueue_script('marque-header-js', get_template_directory_uri() . '/js/header.js');

	wp_enqueue_script('marque-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('marque-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'marque_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
* Limit posts in archive pages.
*/
function marque_limit_archive_posts()
{
	if (is_archive() && !is_admin())
		$limit = 6;
	elseif (is_admin())
		$limit = get_option('per_page');
	else
		$limit = get_option('posts_per_page');

	set_query_var('posts_per_archive_page', $limit);
}
add_filter('pre_get_posts', 'marque_limit_archive_posts');


/*
* Make excerpts 30 words.
*/
function marque_excerpt_length($length)
{
	return 30;
}
add_filter('excerpt_length', 'marque_excerpt_length', 999);

/*
* Replaces the excerpt "Read More" text by a link.
*/
function new_excerpt_more($more)
{
	global $post;
	return '...<br><br><div class="read-more"><a class="read-more-link" href="' . get_permalink($post->ID) . '">Read more</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/*
* Create a settings page for the theme.
*/
function theme_settings_page()
{

	?>
	<div class="wrap">
		<h1>Marque Theme Panel</h1>
		<form method="post" action="options.php">
			<?php
				settings_fields("section");
				do_settings_sections("theme-options-1");
				do_settings_sections("theme-options-2");
				do_settings_sections("theme-options-3");
				do_settings_sections("theme-options-4");
				submit_button();
				?>
		</form>
	</div>
<?php
}
//Add menu item to settings page
function add_theme_menu_item()
{
	add_menu_page("Marque Theme Panel", "Marque Theme Panel", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function marque_header_panel_value()
{
	?>
	<input type="text" name="marque_header_panel_value" id="marque_header_panel_value" value="<?php echo get_option('marque_header_panel_value'); ?>" size="60" placeholder="Set the header button value" />
<?php
}
function marque_header_panel_button()
{
	?>
	<input type="text" name="marque_header_panel_button" id="marque_header_panel_button" value="<?php echo get_option('marque_header_panel_button'); ?>" size="60" placeholder="Set the URL for header button" />
<?php
}
//Settings page element for the portfolio "view more" button that gets the URL to the portfolio page
function display_portfolio_front_heading()
{
	?>
	<input type="text" name="display_portfolio_front_heading" id="display_portfolio_front_heading" value="<?php echo get_option('display_portfolio_front_heading'); ?>" size="60" placeholder="Add the portfolio section heading here" />
<?php
}
//Settings page element for the portfolio "view more" button that gets the URL to the portfolio page
function display_portfolio_element()
{
	?>
	<input type="text" name="portfolio_url" id="portfolio_url" value="<?php echo get_option('portfolio_url'); ?>" size="60" placeholder="Add the URL to the Portfolio Page here..." />
<?php
}
//Settings page element for the portfolio "view more" button that gets the URL to the portfolio page
function display_blog_front_heading()
{
	?>
	<input type="text" name="display_blog_front_heading" id="display_blog_front_heading" value="<?php echo get_option('display_blog_front_heading'); ?>" size="60" placeholder="Add the blog section heading here" />
<?php
}
//Settings page element for the blog "read more" button that gets the URL to the blog page
function display_blog_element()
{
	?>
	<input type="text" name="blog_url" id="blog_url" value="<?php echo get_option('blog_url'); ?>" size="60" placeholder="Add the URL to the Blog Page here here..." />
<?php
}

//Settings page element for changing the frontpage blog post count displayed
function select_post_count()
{
	?>
	<input type="text" name="front_post_count" id="front_post_count" value="<?php echo get_option('front_post_count'); ?>" size="60" placeholder="Set frontpage Blog post count" />
<?php
}

function marque_booking_panel()
{
	?>
	<input type="text" name="marque_booking_panel" id="marque_booking_panel" value="<?php echo get_option('marque_booking_panel'); ?>" size="60" placeholder="Set text to booking" />
<?php
}

function marque_booking_panel_image()
{
	?>
	<input type="text" name="marque_booking_panel_image" id="marque_booking_panel_image" value="<?php echo get_option('marque_booking_panel_image'); ?>" size="60" placeholder="Get the URL from the Media Library" />
<?php
}

function marque_booking_panel_button()
{
	?>
	<input type="text" name="marque_booking_panel_button" id="marque_booking_panel_button" value="<?php echo get_option('marque_booking_panel_button'); ?>" size="60" placeholder="Get the URL to the booking page" />
<?php
}

function marque_booking_panel_value()
{
	?>
	<input type="text" name="marque_booking_panel_value" id="marque_booking_panel_value" value="<?php echo get_option('marque_booking_panel_value'); ?>" size="60" placeholder="Set the booking button value" />
<?php
}

function display_theme_panel_fields()
{

	add_settings_section("section", "Frontpage Header settings", null, "theme-options-1");
	add_settings_field("marque_header_panel_button", "URL for header button", "marque_header_panel_button", "theme-options-1", "section");
	add_settings_field("marque_header_panel_value", "Header Button value", "marque_header_panel_value", "theme-options-1", "section");

	add_settings_section("section", "Frontpage Portfolio settings", null, "theme-options-2");
	add_settings_field("display_portfolio_front_heading", "Portfolio section heading", "display_portfolio_front_heading", "theme-options-2", "section");
	add_settings_field("portfolio_url", "Portfolio Page URL for button", "display_portfolio_element", "theme-options-2", "section");

	add_settings_section("section", "Frontpage Blog posts settings", null, "theme-options-3");
	add_settings_field("display_blog_front_heading", "Blog section heading", "display_blog_front_heading", "theme-options-3", "section");
	add_settings_field("front_post_count", "Number of blog posts displayed:", "select_post_count", "theme-options-3", "section");
	add_settings_field("blog_url", "Blog Page URL for button", "display_blog_element", "theme-options-3", "section");

	add_settings_section("section", "Book Box settings", null, "theme-options-4");
	add_settings_field("marque_booking_panel", "Booking Box text", "marque_booking_panel", "theme-options-4", "section");
	add_settings_field("marque_booking_panel_button", "Booking Page URL for button", "marque_booking_panel_button", "theme-options-4", "section");
	add_settings_field("marque_booking_panel_value", "Booking Page button value", "marque_booking_panel_value", "theme-options-4", "section");
	add_settings_field("marque_booking_panel_image", "Background image for Booking Box on frontpage:", "marque_booking_panel_image", "theme-options-4", "section");


	

	register_setting("section", "marque_header_panel_button");
	register_setting("section", "marque_header_panel_value");
	register_setting("section", "display_portfolio_front_heading");
	register_setting("section", "portfolio_url");
	register_setting("section", "display_blog_front_heading");
	register_setting("section", "blog_url");
	register_setting("section", "front_post_count");
	register_setting("section", "marque_booking_panel");
	register_setting("section", "marque_booking_panel_button");
	register_setting("section", "marque_booking_panel_value");
	register_setting("section", "marque_booking_panel_image");
}

add_action("admin_init", "display_theme_panel_fields");
/*
* Gives the Portfolio archive template the title Portfolio.
*/
function marque_portfolio_title($title)
{

	if (is_post_type_archive('portfolio'))
		return 'Portfolio';

	return $title;
}
add_filter('wp_title', 'marque_portfolio_title');
add_filter('get_the_archive_title', 'marque_portfolio_title');

function marque_booking()
{
	echo '
	
	<div class="custom-box" style="background-image:url(' . get_option('marque_booking_panel_image') . ');">
	<div class="overlay-dark-2">
	<div class="custom-box-center">
	<div class="container-fluid">
	
	<div class="row">
	<div class="col-12 col-lg-10 mx-auto custom-box-position">
	
	<div class="page-title custom-box-text title-lg">' . get_option('marque_booking_panel') . '</div>
	</div>

	
	<div class="col-12 col-lg-10 mx-auto custom-box-position">
	<div class="button-cont"><a href="' . get_option('marque_booking_panel_button') . '" class="square-btn-header hvr-bounce-to-right">' . get_option('marque_booking_panel_value') . '</a></div>
	</div>
	</div>
	
	</div></div></div></div></div>
	
	';
}

/*
* Add active class to the header menu.
*/
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes()
{
	return 'class="square-btn-header hvr-bounce-to-right"';
}

/*
* Define the comment_form_submit_button callback
*/
function filter_comment_form_submit_button($submit_button, $args)
{
	$submit_before = '<div class="button-cont">';
	$submit_after = '</div>';
	return $submit_before . $submit_button . $submit_after;
};

// add the filter
add_filter('comment_form_submit_button', 'filter_comment_form_submit_button', 10, 2);

function as_adapt_comment_form($arg)
{
	$arg['class_submit'] = 'square-btn-header hvr-bounce-to-right';
	// return the modified array
	return $arg;
}
// run the comment form defaults through the newly defined filter
add_filter('comment_form_defaults', 'as_adapt_comment_form');
