<?php
/*
  Template for  functions
  @package Dingo
*/

foreach (glob(get_template_directory() . "/includes/*.php") as $function) {
  $function = basename($function);
  require get_template_directory() . '/includes/' . $function;
}
?>


