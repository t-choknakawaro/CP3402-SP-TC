<?php
/**
 * U3A Child Theme functions and definitions
 *
 * @package U3A_Child_Theme
 */

/**
 * Enqueue parent and child theme styles.
 */
function u3a_enqueue_styles() {
    // Load parent theme's stylesheet first
    wp_enqueue_style( 'parent-style-handle', get_template_directory_uri() . '/style.css' );

    // load the child theme's stylesheet
    wp_enqueue_style( 'u3a-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style-handle' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'u3a_enqueue_styles' );


