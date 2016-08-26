<?php

function theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array( $parent_style )
   );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );


// add_action( 'avada_logo_prepend', 'avada_add_logo_text' );
// function avada_add_logo_text() {
//  echo '<h1>Here is the text</h1>';
// }

function load_scripts() {
  wp_register_script( 'categories-filter', get_stylesheet_directory_uri() . '/index.js', array('jquery', 'jquery.isotope'), '1.11.2', true );
   wp_register_script( 'jquery.isotope', get_bloginfo('template_directory').'/assets/js/isotope.js', array(), false, true);
   wp_enqueue_script( 'categories-filter' );
  wp_enqueue_script( 'jquery.isotope' );
}

add_action('wp_enqueue_scripts', 'load_scripts');
?>
