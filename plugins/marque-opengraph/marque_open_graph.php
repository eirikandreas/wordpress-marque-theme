<?php
/*
Plugin Name: Marque Open Graph integration
Description: Integrates Open Graph to posts made in lecture
*/

/*
* Ensure that the proper doctype is added to our HTML so websites
* know there will be code inside
*/
function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

/*
* Adding the proper metadata for Open Graph for posts ONLY
*/
function fb_opengraph() {
	//define global object for access
    global $post;
    
    //validate to see if content is a post, if so add og tags
    if(is_single()) {
        //check for feature post img, if not use default im img folder in theme
        if(has_post_thumbnail($post->ID)) {

            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium');
        } else {  
            $img_src = get_stylesheet_directory_uri() . '/img/og-img.png';
        }
        //check for excerpt (post summary), if so we strip tags and display
        //if not then use general page description.
        if($excerpt = $post->post_excerpt) {
            $excerpt = strip_tags($post->post_excerpt);
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
        ?>

    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	<meta property="og:image" content="<?php echo $img_src; ?>"/>
 
<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);