<?php
/*
  Theme support file
  @package Dingo
*/

// fuctnion for grab source and alt for global use  
function dingo_get_images_attr($field) {
  $url = $field['url'];
  $alt = $field['alt'];
  return "<img src='$url' alt='$alt' />";
}
