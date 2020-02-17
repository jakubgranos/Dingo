<?php
/*
  Theme options 
  @package Dingo
*/

add_action('acf/init', 'my_acf_op_init');

function my_acf_op_init() {
  if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
      'page_title'    => __('Theme General Settings'),
      'menu_title'    => __('Theme Settings'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
    ));
  }
}
