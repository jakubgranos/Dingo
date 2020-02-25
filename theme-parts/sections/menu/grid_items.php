<?php
/*
  Template for menu posts 
  @package Dingo
*/
global $post;
$posts = get_sub_field('grid_menu');
$button_text = get_field('text', 'option');
$button_icon = get_field('icon', 'option');
if($posts):
  foreach($posts as $post):
    setup_postdata($post);
    $post_types = get_post_type($post);
    switch($post_types) {
      case 'menu':
        require_once 'grid_post_types/grid_menu.php';
        break;
      case 'page':
        // this is for item in page
        break;
    }     
  endforeach;
  wp_reset_postdata();
endif;
