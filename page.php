<?php
get_header();

require_once('theme-parts/navigation.php');

class PageSections {
  private static $blocks = array(
    'section_menu' => 'section_menu.php',
    'section_contact' => 'section_contact.php',
  );
  public static function display($field_name = 'sections', $sec_param = null){
    while( have_rows( $field_name, $sec_param ) ): the_row();
      $block_layout = get_row_layout();
      if (isset(self::$blocks[$block_layout]) ): require_once( "theme-parts/sections/" . self::$blocks[$block_layout] );
      endif;
    endwhile;
  }
}

PageSections::display();

get_footer();