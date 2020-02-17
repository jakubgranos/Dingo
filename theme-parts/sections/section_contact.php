<?php
/*
  Template for section contact
  @package Dingo
*/

$title = get_sub_field('title');?>

<section>
  <?php if (!empty($title)): ?>
    <h2><?php echo $title; ?>
  <?php endif; ?>   
</section> 