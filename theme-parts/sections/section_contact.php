<?php
$title = get_sub_field('title');
$background_color = get_sub_field('background_color'); ?>

<section style="background-color: <?php echo $background_color; ?>; min-height: 400px; padding: 20px;">
  <?php if (!empty( $title )): ?>
    <h2><?php echo $title; ?>
  <?php endif; ?>
</section>