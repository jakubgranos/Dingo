<?php
/*
  Theme custom post type
  @package Dingo
*/

function menu_card_post_type() {
  $labels = array(
    'name' => 'Menu cards',
    'singular_name' => 'Menu cards',
    'add_new' => 'Add post',
    'all_items' => 'All posts',
    'add_new_item' => 'Add post',
    'edit_titem' => 'Edit Post',
    'new_item' => 'New Post',
    'view_item' => 'View Post',
    'search_item' => 'Search menu cards posts',
    'not_found' => 'No posts found',
    'not_found_in_trash' => 'No posts found in trash',
    'parent_item_colon' => 'Parent Post'
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
  register_post_type('menu_cards', $args);
}
add_action('init','menu_card_post_type');
