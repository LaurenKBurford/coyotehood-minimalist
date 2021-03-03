<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



?>



<section id="sidebar">



<?php 



if( is_active_sidebar( 'coyotehoodtto_sidebar' ) ) {

    dynamic_sidebar( 'coyotehoodtto_sidebar' );

}



?>



</section>