<?php
/*
  Template for enqueue
  @package Dingo

*/ 
  function dingo_load_scripts() {
    // css / scss / others
    wp_enqueue_style('dingo_css', get_template_directory_uri() . './css/dingo.css', array(), '1.0.0', 'all');

    // js / jquery / others
    wp_enqueue_script('dingo_js', get_template_directory_uri() . './js/dingo.js', array(), '1.0.0', true);
  }
  add_action('wp_enqueue_scripts', 'dingo_load_scripts');
?>