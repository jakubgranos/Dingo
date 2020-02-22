<?php
/*
  Theme custom post type
  @package Dingo
*/

function popular_posts() {
  $labels = array(
    'name' => 'Popular posts',
    'singular_name' => 'Popular post',
    'add_new' => 'Add post',
    'all_items' => 'All posts',
    'add_new_item' => 'Add post',
    'edit_titem' => 'Edit Post',
    'new_item' => 'New Post',
    'view_item' => 'View Post',
    'search_item' => 'Search popular posts',
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
    'support' => array(
      'title',
      'editor',
      'exerpt',
      'thumbnail',
      'revisions'
    ),
    'taxonomies' => array('category','post_tag'),
    'menu_position' => 4,
    'exclude_from_search' => false
  );
  register_post_type('popular-post', $args);
}

add_action('init','popular_posts');
