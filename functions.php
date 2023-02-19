<?php
/**
 * Outputs related posts with thumbnail.
 * This function is based on https://netmospherics.com/blog/wordpress-related-posts-without-plugin/
 * Require this file inside theme functions.php // require_once 'inc/helpers/single-related-posts.php';
 * To Be used inside single post before end of while loop // showRelatedPosts('post', get_the_ID(), 4, 'tags');
 * @param  string $postType
 * @param  integer $postID
 * @param  integer $totalPosts Number of related posts to display
 * @param  string $relatedBy Specify posts related by 'tags' || 'category'
 * @author Waseem Mansour <waseem.mn2002@gmail.com>
 */


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



