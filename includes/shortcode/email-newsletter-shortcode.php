<?php
/*
  Theme shortcode
  @package Dingo
*/

function email_newsletter_shortcode( $atts, $content = null ) {
  $email_icon = get_field( 'email_icon', 'option');

  $email = "<input type='text' class='form-control' placeholder='Email Address'>";
  $icon = "<div class='input-group-append'><button class='btn' type='button'><i class='fas fa-{$email_icon}'></i></button></div>";
  $output = "<div class='input-group mb-3'>{$email} {$icon}</div>";
  return $output;
}

add_shortcode( 'email-newsletter', 'email_newsletter_shortcode' );
