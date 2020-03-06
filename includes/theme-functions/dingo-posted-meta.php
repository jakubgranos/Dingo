<?php

function dingo_posted_meta() {
  $categories = get_the_category();
  $date = get_the_date();
  if(!empty($categories)):
    foreach($categories as $category):
      $output = ' <a href="' . esc_url(get_category_link($category->term_id)) . '" class="date_item">' . '<span> # </span>' . esc_html($category->name) . '</a>';
    endforeach;
  endif;
  return '<div class="date"> <a href="'.$date.'" class="date_item">' . $date . '</a> ' . $output . ' </div>';
}
