<?php
/*
  Theme support file
  @package Dingo
*/

// fucnction for grab source and alt for global use  
function dingo_render_acf_image($field) {
  if(empty($field)) { return null; }
  
  $url = $field['url'];
  $alt = $field['alt'];
  return "<img src='$url' alt='$alt' />";
}
