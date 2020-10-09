<?php
/*
Plugin Name: Marque Scroll Top
Description: Adds a semi transparent scroll to top button
*/

function enqueue_scripts(){
  
    // Adds a stylesheet to the plugin.
    wp_enqueue_style( 'marque-scroll-top-style', plugins_url( 'css/style.css' , __FILE__ ) );
    // Adds a fontawesome so that the arrow shows.
    wp_enqueue_style( 'marque-scroll-top-fontawesome', plugins_url( 'css/solid.css' , __FILE__ ) );
    // Loads jQuery.
    wp_enqueue_script('marque-scroll-top-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', __FILE__ , array( 'jquery' ), '',  true );
    // Loads the Marque Scroll Top script
    wp_enqueue_script( 'scroll-top-script', plugins_url( 'js/marquescrolltop.js' , __FILE__ , array( 'jquery' ), '',  true ) );
  
}
// Add the css and js to the document.
add_action('wp_enqueue_scripts','enqueue_scripts');

// Defines the marque_scroll_top function which is the basis for the plguin.
function marque_scroll_top()
{
  echo '<a href="#" class="marque-scroll-top"><i class="fas fa-angle-up"></i></a>';
}
 // Adds the marque_scroll_top function/plugin after the footer.
 add_action("wp_footer", "marque_scroll_top");

