<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



function coyotto_widgets() {

    register_sidebar([

        'name'              =>  __( 'Coyotehoodtto Footer Sidebar', 'coyotehoodtto' ),

        'id'                =>  'coyotehoodtto_sidebar',

        'description'       =>  __( 'Sidebar for the Coyotehoodtto theme', 'coyotehoodtto' )

    ]);

}