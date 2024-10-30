<?php
function cl_booster_add_to_cart_after_content(){

	$after_cart_data = get_post_meta( get_the_ID(),'cl_booster_demo_wysiwyg',true);

		if($after_cart_data){
			echo '<div class="cart-after-box">';
				echo $after_cart_data;
			echo '</div>';
	}
}
add_action('woocommerce_after_add_to_cart_form','cl_booster_add_to_cart_after_content');