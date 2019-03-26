<?php

function bennyl_scripts() {

	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );

add_action( 'wp_enqueue_scripts', 'bennyl_scripts' );
    
}

// Support Featured Images
add_theme_support( 'post-thumbnails' );