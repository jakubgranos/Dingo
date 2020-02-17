<?php
get_header();

require_once('theme-parts/navigation.php');

if( have_rows('sections') ):
  while ( have_rows('sections') ):
  switch(the_row()) {
    case get_row_layout() == 'section_menu':
      require_once('theme-parts/sections/section_menu.php');
    break;
    case get_row_layout() == 'section_contact':
      require_once('theme-parts/sections/section_contact.php');
    break;
  }
  endwhile;
endif;

get_footer();