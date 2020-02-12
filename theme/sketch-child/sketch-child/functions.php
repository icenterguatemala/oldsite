<?php

function custom_scripts() {

wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/main.js', array() , false, true );

wp_enqueue_script( 'custom-script' );

}

add_action( 'wp_enqueue_scripts', 'custom_scripts', 99 );