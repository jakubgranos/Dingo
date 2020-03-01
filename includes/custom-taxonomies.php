<?php
/*
  Theme custom taxonomies
  @package Dingo
*/

function dingo_custom_taxonomies() {
  $labels = array(
    'name' => 'Jobs title',
    'singular_name' => 'Job title',
    'search_items' => 'Search title',
    'all_items' => 'All titles',
    'parent_item' => 'Parent title',
    'parent_item_colon' => 'Parent title:',
    'edit_item' => 'Edit title',
    'update_item' => 'Update title',
    'add_new_item' => 'Add New title', 
    'new_item_name' => 'New title Name',
    'menu_name' => 'Jobs title',
  );

  $args = array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'jobs_title')
  );
  register_taxonomy('jobs_title', array('team_members'), $args);
  $custom_tax_mb = new Taxonomy_Single_Term( 'jobs_title', array('team_members'), 'select');
}
add_action('init', 'dingo_custom_taxonomies');
