<?php
/*
  Theme custom post type
  @package Dingo
*/

function menu_item_post_type() {
  $labels = array(
    'name' => 'Menu items',
    'singular_name' => 'Menu item',
    'add_new' => 'Add item',
    'all_items' => 'All items',
    'add_new_item' => 'Add item',
    'edit_titem' => 'Edit item',
    'new_item' => 'New item',
    'view_item' => 'View item',
    'search_item' => 'Search items',
    'not_found' => 'No items found',
    'not_found_in_trash' => 'No items found in trash',
    'parent_item_colon' => 'Parent item'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array('category','post_tag'),
    'menu_position' => 4,
    'exclude_from_search' => false
  );
  register_post_type('menu_items', $args);
}
add_action('init','menu_item_post_type');
