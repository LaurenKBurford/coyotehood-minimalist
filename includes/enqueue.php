<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



function coyotto_enqueue() {

    $uri                    =   get_theme_file_uri();



    wp_register_style( 'coyotto_google_fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap' );

    wp_register_style( 'coyotto_reset', $uri . '/css/reset.css' );

    wp_register_style( 'coyotto_css', $uri . '/css/styles.css' );

    wp_register_style( 'coyotto_media_queries', $uri . '/css/media-queries.css' );

    



    wp_enqueue_style( 'coyotto_google_fonts' );

    wp_enqueue_style( 'coyotto_reset' );

    wp_enqueue_style( 'coyotto_css' );

    wp_enqueue_style( 'coyotto_media_queries' );



    wp_enqueue_script( 'jquery' );


}