<?php
/*
Plugin Name: Marque Analytics
Description: Adds support for Google Analytics with Track Tag that can be added under Settings
*/



// create custom plugin settings menu
add_action('admin_menu', 'create_menu');

function create_menu() {

  //create new top-level menu
  
  add_options_page('Marque Analytics Settings', 'Marque Google Analytics', 'manage_options', 'marque_analytics', 'marque_analytics_page');
//	add_menu_page('Marque Analytics Settings', 'Marque Google Analytics', 'administrator', __FILE__, 'marque_analytics_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_marque_analytics_tag_settings' );
}


function register_marque_analytics_tag_settings() {
	//register our settings
  register_setting( 'marque_analytics_settings_group', 'marque_analytics_tag' );


}
function marque_analytics_page() {
?>
<div class="wrap">
<h1>Add support for Google Analytics</h1>

<form method="post" action="options.php">

    <?php settings_fields( 'marque_analytics_settings_group' ); ?>

    <table class="form-table">
        <tr valign="top">
        <th scope="row">Enter your Google Tracking Tag</th>
        <td><textarea type="text" name="marque_analytics_tag" rows="12" cols="50" placeholder="Copy your tag here" value="<?php echo esc_attr( get_option('marque_analytics_tag') ); ?>"></textarea></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>



</form>
</div>
<?php } ?>
<?php
add_action('wp_head', 'marque_add_analytics');
function marque_add_analytics() { ?>
 
 <?php echo get_option( 'marque_analytics_tag' ); ?>
 
<?php } ?>