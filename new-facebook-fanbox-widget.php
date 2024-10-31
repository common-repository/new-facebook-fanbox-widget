<?php
/*
* Plugin Name: New  Facebook FanBox  Widget
* Plugin URI: http://swadeshswain.com/
* Description: The Page Plugin lets you easily embed and promote any Facebook Page on your website. Just like on Facebook, your visitors can like and share the Page without having  to leave your site.you can use shortcode on page or post using [fbox].
* Version: 1.1
* Author: swadeshswain
* Author URI: http://www.swadeshswain.com/
* License: GPL2
*/
 if ( ! defined( 'WPINC' ) ) {
	die;
 }
  define( 'NFFW_URL_PATH', plugin_dir_url( __FILE__ ) );
  define( 'NFFW_PLUGIN_PATH', plugin_dir_path(__FILE__) );
 include( NFFW_PLUGIN_PATH . 'lib/nffw-head-script.php');
 include( NFFW_PLUGIN_PATH . 'lib/nffw-register-widget.php');
 include( NFFW_PLUGIN_PATH . 'lib/nffw-shortcode.php');
 // init process for registering tinymce button
 add_action('init', 'nffw_shortcode_button_init');
 function nffw_shortcode_button_init() {

      //Abort early if the user will never see TinyMCE
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
           return;

      //Add a callback to regiser the tinymce plugin   
      add_filter("mce_external_plugins", "nffw_register_tinymce_plugin"); 

      // Add a callback to add the button to the TinyMCE toolbar
      add_filter('mce_buttons', 'nffw_add_tinymce_button');
}

//This callback registers the plug-in
function nffw_register_tinymce_plugin($plugin_array) {
    $plugin_array['nffw_button'] = NFFW_URL_PATH . '/js/shortcode.js' ;
    return $plugin_array;
}

//This callback adds the button to the toolbar
function nffw_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "nffw_button";
    return $buttons;
}

?>