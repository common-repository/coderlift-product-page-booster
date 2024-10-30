<?php
function cladd_check_woocommerce_is_on(){
	if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        add_action( 'admin_notices', 'cladd_error_notice' );

        deactivate_plugins( plugin_basename( __FILE__ ) ); 

        if ( isset( $_GET['activate'] ) ) {
            unset( $_GET['activate'] );
        }
    }
}

add_action( 'admin_init', 'cladd_check_woocommerce_is_on' );

function cladd_error_notice(){
    ?><div class="error"><p><?php _e('Please activate woocommerce for CL Woocommerce Add to Cart After Plugin','cl-add-to-cart-after') ?></p></div><?php
}