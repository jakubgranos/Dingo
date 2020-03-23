<?php
/*
  Theme section
  @package Dingo
*/

class PageSections {
  private static $blocks = array(
    'section_banner' => 'banner/banner-container.php',
    'section_grid' => 'grid/grid-items-container.php',
    'section_hero' => 'hero/hero.php',
    'section_video' => 'video/video-container.php',
    'section_menu_list' => 'menu-list/menu-list-container.php',
    'section_contact' => 'contact/contact.php',
  );
  public static function display( $field_name = 'sections', $sec_param = null) {
    while ( have_rows( $field_name, $sec_param ) ):
      the_row();
      $block_layout = get_row_layout();
      if ( isset( self::$blocks[ $block_layout ] ) ):
        require get_template_directory() . "/theme-parts/sections/" . self::$blocks[ $block_layout ];
      endif;
    endwhile;
  }
}
