<?php
/*
  Theme section
  @package Dingo
*/

class PageSections {
  private static $blocks = array(
    'section_banner' => 'banner/banner_container.php',
    'section_popular_posts' => 'popular-posts/popular_posts.php'
  );
  public static function display($field_name = 'sections', $sec_param = null) {
    while (have_rows($field_name, $sec_param)):
      the_row();
      $block_layout = get_row_layout();
      if (isset(self::$blocks[$block_layout])):
        require_once get_template_directory() . "/theme-parts/sections/" . self::$blocks[$block_layout];
      endif;
    endwhile;
  }
}
