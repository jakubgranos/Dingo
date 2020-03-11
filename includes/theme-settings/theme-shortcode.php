<?php
/*
  Theme shortcode
  @package Dingo
*/

function dingo_button_shortcode( $atts, $content = null ) {
  //this is for button icon, change in panel
  $icon = get_field( 'icon', 'option' );
  $get_icon = $icon[ 'url' ];
  $get_icon_alt = $icon[ 'alt' ];

  //this is for default value of href
  $link = get_sub_field( 'link' );
  $get_link = $link[ 'url' ];

  $values = shortcode_atts( array(
    'url' => $get_link,
    'target' => ''
  ), $atts );

  return '<a href="' . $values[ 'url' ] . '" target="' . $values[ 'target' ] . '" class="btn_3"> ' . $content . ' <img src="' . $get_icon . '" alt="' . $get_icon_alt . '"> </a> ';
}

add_shortcode( 'button', 'dingo_button_shortcode' );
