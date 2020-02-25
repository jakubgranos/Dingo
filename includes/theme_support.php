<?php
/*
  Theme support file
  @package Dingo
*/

// Activate all menus in Dingo Project
function register_dingo_menus() {
  register_nav_menus(array('header_menu' => __('Page Navigation Menu')));
}
add_action('init', 'register_dingo_menus');

// fuctnion for grab source and alt for global use  
function get_images_attr($field) {
  $url = $field['url'];
  $alt = $field['alt'];
  return "<img src='$url' alt='$alt' />";
}


// adding all theme supports
add_theme_support( 'post-thumbnails' );

