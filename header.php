<?php



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



?>



<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <?php wp_head(); ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title></title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="">

    </head>

    <body <?php body_class(); ?>>



    <section id="logo-and-menu">



        <section id="logo">

            <a href="<?php echo get_site_url(); ?>"><img id="coyotehood-logo" src="<?php echo get_template_directory_uri(); ?>/media/logo.png"></a>

        </section>



        <section id="menu">

            <?php

            if( has_nav_menu( 'primary' ) ) {

                wp_nav_menu([

                    'theme_location'            =>  'primary'

                ]);

            }

            ?>

        </section>



    </section>



    <section id="page-section">



    