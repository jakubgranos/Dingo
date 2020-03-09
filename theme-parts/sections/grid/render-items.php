<?php
/*
  Template render items
  @package Dingo
*/

function render_items( $post_type ) {
  switch( $post_type ) {
    case 'menu_item':
      require 'grid-items/menu-card.php';
      break;
    case 'team_member':
      require 'grid-items/team-member.php';
      break;
    default:
      require 'grid-items/post-item.php';
      break;
  }  
}
