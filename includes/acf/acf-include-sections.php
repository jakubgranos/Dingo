<?php
/*
  Theme section
  @package Dingo
*/

class PageSections {
  private static $blocks = array(
    'section_banner' => 'banner/banner-container.php',
    'section_grid' => 'grid/grid-items-container.php',
    'section_recent' => 'recent/recent-items-container.php'
  );
  public static function display($field_name = 'sections', $sec_param = null) {
    while (have_rows($field_name, $sec_param)):
      the_row();
      $block_layout = get_row_layout();
      if (isset(self::$blocks[$block_layout])):
        require get_template_directory() . "/theme-parts/sections/" . self::$blocks[$block_layout];
      endif;
    endwhile;
  }
}
