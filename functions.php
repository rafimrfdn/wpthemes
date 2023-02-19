<?php


// activate style style.css file
function thesun_enqueue_scripts(){
  wp_enqueue_style(
    'thesun-styles',
    get_template_directory_uri() . '/style.css',
    array(),
    wp_get_theme()->get( 'Version' )
  );
}
add_action( 'wp_enqueue_scripts', 'thesun_enqueue_scripts' );

// activate stylesheet for editor
function thesun_theme_setup() {
  add_editor_style('style.css');
}
add_action( 'after_setup_theme', 'thesun_theme_setup');


// custom javascript code
function tutsplus_enqueue_custom_js() {
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/script.js');
}
add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');



