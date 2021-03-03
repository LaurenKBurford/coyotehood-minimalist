<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



//Includes



include( get_theme_file_path( 'includes/enqueue.php' ) );

include( get_theme_file_path( 'includes/setup.php' ) );

include( get_theme_file_path( 'includes/widgets.php' ) );



// Hooks



add_action( 'wp_enqueue_scripts', 'coyotto_enqueue' );

add_action( 'after_setup_theme', 'coyotto_setup_theme' );

add_action( 'widgets_init', 'coyotto_widgets' );