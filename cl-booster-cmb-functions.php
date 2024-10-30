<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'cl_booster_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


add_action( 'cmb2_admin_init', 'cl_booster_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function cl_booster_register_demo_metabox() {
	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => 'cl_booster_demo_metabox',
		'title'         => esc_html__( 'Cart After Content', 'wcprd-booster' ),
		'object_types'  => array( 'product' ), // Post type
		'priority'   => 'low',
		'show_names' => false,

	) );

	$cmb_demo->add_field( array(
		'name'    => esc_html__( 'Cart after content editor', 'wcprd-booster' ),
		'desc'    => esc_html__( 'Use this editor for adding the content which will show after add to cart in the product page', 'wcprd-booster' ),
		'id'      => 'cl_booster_demo_wysiwyg',
		'type'    => 'wysiwyg',
		'options' => array(
			'textarea_rows' => 5,
		),
	) );

}
