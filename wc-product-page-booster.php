<?php
/*
Plugin Name: Coderlift Product Page Booster
Plugin URI: https://coderlift.com/coderlift-product-page-booster/
Description: This plugin will add some extra features in the product page that will help to increase user experience and boost the sales of the product.
Version: 1.0.0
Author: CoderLift
Author URI: https://www.coderlift.com
License: GPLv2 or later
Text Domain: wcprd-booster
Domain Path: /languages/
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/*Text domain loading*/
function cl_booster_load_textdomain() {
    load_plugin_textdomain( 'cl-add-to-cart-after', false, dirname( __FILE__ ) . "/languages" );


}
add_action( "plugins_loaded", 'cl_booster_load_textdomain' );


//enqueue assets
function cl_booster_main_css(){

    wp_enqueue_style('main-css', plugin_dir_url( __FILE__ ).'assets/style.css');

}
add_action('wp_enqueue_scripts','cl_booster_main_css');


/********************************
 ***Including all required files***
 ********************************/

//Check Woocommerce is on or off
require_once(plugin_dir_path(__FILE__).'cl-booster-check-woocommerce.php');

// add something after cart
require_once(plugin_dir_path(__FILE__).'cl-booster-after-cart-content.php');

// add cmb library
require_once(plugin_dir_path(__FILE__).'cl-booster-cmb-functions.php');