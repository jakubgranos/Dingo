<?php
/*
  Theme custom post type
  @package Dingo
*/

function menu_item_post_type() {
  $labels = array(
    'name' => 'Menu Items',
    'singular_name' => 'Menu Items',
    'add_new' => 'Add Item',
    'all_items' => 'All Items',
    'add_new_item' => 'Add Item',
    'edit_titem' => 'Edit Item',
    'new_item' => 'New Item',
    'view_item' => 'View Item',
    'search_item' => 'Search Items',
    'not_found' => 'No Items found',
    'not_found_in_trash' => 'No Items found in trash',
    'parent_item_colon' => 'Parent Item'
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
