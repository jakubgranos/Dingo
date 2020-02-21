<?php
/*
  Template for banner
  @package Dingo
*/
function wpc_get_link($acf_link, $args = null) {
  if (empty($acf_link) || empty($acf_link['url'])) {
    return null;
  }
  
  $url = $acf_link['url'];
  $title = $acf_link['title'];
  $target = $acf_link['target'];
  $id = '';
  $class = '';
  $content = '';

  // Set link class
  if (!empty($args['class'])) {
    $class = "class='{$args['class']}'";
  }

  // Set link id
  if (!empty($args['id'])) {
    $id = "id='{$args['id']}'";
  }

  // Set link title. If title is not set then URL will be used instead
  if (empty($title)) {
    $content = $url;
  } else {
    $content = $title;
  }
  
  // Set link target
  if (!empty($target)) {
    $target = "target='{$target}'";
  }

  // Set custom content
  if (!empty($args['content'])) {
    $content = $args['content'];
  }

  $link = "<a href='{$url}' {$target} {$class} {$id}>{$content}</a>";
  return $link;
}
