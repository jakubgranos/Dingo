<?php
/*
  Template relationship items
  @package Dingo
*/

global $post;

include_once( 'render-items.php' );

$cards = get_sub_field( 'cards' );
  
foreach( $cards as $post ):
  setup_postdata( $post );
  $post_type = get_post_type( $post );
  render_items( $post_type );
endforeach;

wp_reset_postdata();

