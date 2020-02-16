<?php
/*
  Template for header part
  @package Dingo
*/
$logo = get_field('theme_logo', 'option');
$button = get_field('theme_nav_button', 'option');?>

<header class="header">
  <img class="header-logo" src="<?php echo $logo;?>" alt="Dingo logo">
  <nav class="header-navigation">
    <?php wp_nav_menu(array(
      'theme_location' => 'header_menu'
    ));?>
  </nav>
  <a class="btn btn-book-table" href="<?php $button?>">Book Table</a>
</header>
