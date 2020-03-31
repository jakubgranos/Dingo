<?php
/*
  Theme support file
  @package Dingo
*/

// Activate all menus in Dingo Project
function register_dingo_menus() {
  register_nav_menus( array( 'header_menu' => __( 'Page Navigation Menu' ) ) );
  register_nav_menus( array( 'test' => __( 'Page Footer Menu' ) ) );
}
add_action( 'init', 'register_dingo_menus' );



// adding all theme supports
add_theme_support( 'post-thumbnails' );

