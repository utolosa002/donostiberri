<?php
/**
 * Sydney child functions
 *
 */


/**
 * Enqueues the parent stylesheet. Do not remove this function.
 *
 */
add_action( 'wp_enqueue_scripts', 'sydney_child_enqueue' );
function sydney_child_enqueue() {
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

	$tau_includes = array('inc/slider.php');
	// Allow child themes/plugins to add widgets to be loaded.
	$tau_includes = apply_filters( 'woo_includes', $tau_includes );
	foreach ( $tau_includes as $i ) {
		locate_template( $i, true );
	}


/* ADD YOUR CUSTOM FUNCTIONS BELOW */
?>