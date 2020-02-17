<?php
/*
  theme enqueue
  @package Dingo
*/ 
  function dingo_load_scripts() {
    // css / scss / others
    wp_enqueue_style('dingo_css', get_template_directory_uri() . './css/dingo.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . './css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('all_css', get_template_directory_uri() . './css/all.css', array(), '1.0.0', 'all');
    wp_enqueue_style('dingo_style_css', get_template_directory_uri() . './css/style.css', array(), '1.0.0', 'all');
    // js / jquery / others
    wp_enqueue_script('dingo_js', get_template_directory_uri() . './js/dingo.js', array('j'), '1.0.0', true);
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . './js/boostrap.min.js', array('jQuery'), '4.3.1', true);
    wp_enqueue_script('jquery-3.3.1_js', get_template_directory_uri() . './js/jquery-3.3.1.slim.min.js', array('jQuery'), '3.3.1', true);
    wp_enqueue_script('jquery.magnific-popup_js', get_template_directory_uri() . './js/jquery.magnific-popup.js', array('jQuery'), '1.1.0', true);
  }
  add_action('wp_enqueue_scripts', 'dingo_load_scripts');
