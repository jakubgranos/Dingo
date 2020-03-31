<?php
/*
  Theme shortcode email newsletter
  @package Dingo
*/

function email_newsletter_shortcode( $atts, $content = null ) {
  if(isset($_GET['email'])){
    $to = get_option('admin_email'); 
    $from = $_GET['email'];
    $subject = "Form submission";
    $message = 'New Subscriber:' . $from;
    $headers = "From: New dingo newsletter" . ' ' . $from;
    mail($to,$subject,$message,$headers);
  }
   
  $email_icon = get_field( 'email_icon', 'option');
  $input = "<input type='email' name='email' class='form-control' placeholder='Email Address'>";
  if( !empty( $email_icon ) ):
    $button = "<button type='submit' name='submit' class='btn' type='button'><i class='fas fa-{$email_icon}'></i></button>";
    else: $button = '';
  endif;
  $contact_form = "<form action='' method='get' class='input-group mb-3'>{$input} {$button}</form>";
  $output = $contact_form;
  return $output;
}

add_shortcode( 'email-newsletter', 'email_newsletter_shortcode' );
