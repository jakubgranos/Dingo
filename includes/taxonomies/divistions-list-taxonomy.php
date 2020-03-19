<?php
/*
  Template for taxonomy divisions list
  @package Dingo
*/
function dingo_divisions_list_taxonomy() {
  $labels = array(
    'name' => 'Divisions list',
    'singular_name' => 'Division list',
    'search_items' => 'Search Division',
    'all_items' => 'All Divisions',
    'parent_item' => 'Parent Division',
    'parent_item_colon' => 'Parent Division:',
    'edit_item' => 'Edit Division',
    'update_item' => 'Update Division',
    'add_new_item' => 'Add New Division', 
    'new_item_name' => 'New division Name',
    'menu_name' => 'Divisions list',
  );
  register_taxonomy('divisions_list', array('menu_item'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'divisions_list')
  ));
}

add_action('init', 'dingo_divisions_list_taxonomy');
