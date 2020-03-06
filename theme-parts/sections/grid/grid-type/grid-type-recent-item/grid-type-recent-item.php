<?php
/*
  Template grid type recent items
  @package Dingo
*/
$display_posts = get_sub_field('display_posts');

switch($display_posts) {
  case 'latest':
    require 'grid-type-recent-item-latest.php';
    break;
  case 'manual':
    require 'grid-type-recent-item-manual.php';
    break;
}   
