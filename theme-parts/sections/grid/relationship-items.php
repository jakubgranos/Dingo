<?php

include_once('render-items.php');

$cards = get_sub_field( 'cards' );
  
foreach( $cards as $post ):
  setup_postdata( $post );
  $post_type = get_post_type( $post );
  do_the_fucking_render( $post_type );
endforeach;
wp_reset_postdata();

