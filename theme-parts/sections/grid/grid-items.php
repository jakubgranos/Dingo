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
  switch($post_type) {
    case 'menu_item':
      require 'grid-type/grid-type-menu-card.php';
      break;
    case 'team_member':
      require 'grid-type/grid-type-team-member.php';
      break;
  }     
endforeach;
wp_reset_postdata();
