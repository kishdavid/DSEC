<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

/**
 * Enqueue scripts and styles for front-end.
 *
 * @since Bootstrap Canvas WP 1.0
 */

add_action('wp_enqueue_scripts', 'load_javascript_files');
function load_javascript_files() {
	wp_register_script('custom-public.js', get_stylesheet_directory_uri() . '/js/custom-public.js', array('jquery'), true );
	wp_enqueue_script('custom-public.js');
}