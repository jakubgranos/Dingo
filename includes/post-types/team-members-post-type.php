<?php
/*
  Template for custom post type team members
  @package Dingo
*/
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
  register_post_type('team_member', array(
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
  ));
}
add_action('init','team_members_post_type');
