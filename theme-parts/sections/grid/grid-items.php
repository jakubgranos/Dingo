<?php
/*
  Template for grid item 
  @package Dingo
*/
global $post;
$cards = get_sub_field('cards');
foreach($cards as $post):
  setup_postdata($post);
  $post_type = get_post_type($post);
  switch($post_types) {
    case 'menu_items':
      require_once 'grid-type/grid-type-menu-card.php';
      break;
    case 'page':
      // this is for item in page
      break;
  }     
endforeach;
wp_reset_postdata();
