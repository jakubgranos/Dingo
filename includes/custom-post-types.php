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
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array('category','post_tag'),
    'menu_position' => 4,
    'exclude_from_search' => false
  );
  register_post_type('menu_item', $args);
}
add_action('init','menu_item_post_type');

function team_members_post_type() {
  $labels = array(
    'name' => 'Team members',
    'singular_name' => 'Team member',
    'add_new' => 'Add member',
    'all_items' => 'All members',
    'add_new_item' => 'Add member',
    'edit_titem' => 'Edit member',
    'new_item' => 'New member',
    'view_item' => 'View member',
    'search_item' => 'Search members',
    'not_found' => 'No members found',
    'not_found_in_trash' => 'No members found in trash',
    'parent_item_colon' => 'Parent members'
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
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array('category'),
    'menu_position' => 5,
    'exclude_from_search' => false
  );
  register_post_type('team_member', $args);
}
add_action('init','team_members_post_type');
