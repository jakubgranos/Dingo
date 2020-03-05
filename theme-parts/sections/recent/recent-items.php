<?php
/*
  Template grid type recent items
  @package Dingo
*/
$dispplay_posts = get_sub_field('display_posts');

switch($dispplay_posts) {
  case 'latest':
    require 'recent-items-latest.php';
    break;
  case 'manual':
    require 'recent-items-manual.php';
    break;
}   
