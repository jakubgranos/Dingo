<?php
/*
  Template for taxonomy job title
  @package Dingo
*/
function dingo_job_title_taxonomy() {
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
  register_taxonomy('jobs_title', array('team_member'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'jobs_title')
  ));
  $dingo_job_title_taxonomy_select = new Taxonomy_Single_Term( 'jobs_title', array('team_member'), 'select');
}

add_action('init', 'dingo_job_title_taxonomy');
