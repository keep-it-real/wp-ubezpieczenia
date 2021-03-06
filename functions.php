<?php

function addScripts() {

  wp_enqueue_style( 'firstfont', 'https://use.typekit.net/xwu8kes.css' );
  wp_enqueue_style( 'secondfont', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'js', get_template_directory_uri() . '/js/javascript.js', array(), true );

}
add_action( 'wp_enqueue_scripts', 'addScripts' );