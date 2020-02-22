<?php
/*
  Template for head
  @package Dingo
*/
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta <?php bloginfo('charset');?>>
  <meta name="description" content="<?php bloginfo('description');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?><?php wp_title();?></title>
  <?php wp_head();?>
</head>
<body>
<header class="header main_menu home_menu">
  <?php require_once 'theme-parts/sections/navigation/navigation_container.php'; ?>
</header>
