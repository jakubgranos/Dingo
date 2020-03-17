<?php
/*
  Template for menu list
  @package Dingo
*/
$heading = get_sub_field( 'heading' );
$subheading = get_sub_field( 'subheading' );

$cat_list = get_sub_field_object( 'categories' );	
$cat_value = $cat_list['value'];
$cat_args = array(
  'orderby' => 'name',
);
$categories = get_categories( $cat_args );?>

<section class="food_menu gray_bg">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="section_tittle"> <?php
          if( !empty( $heading ) ):?>
            <p><?php echo $heading;?></p> <?php
          endif;

          if( !empty( $subheading ) ):?>
            <h2><?php echo $subheading;?></h2> <?php
          endif;?>
        </div>
      </div>
      <?php require 'menu-list-navigation.php'?>
      <div class="col-lg-12">
        <div class="tab-content" id="myTabContent"><?php
          foreach($categories as $category):
            $cat_slug = $category->slug;
            $cat_count = $categories->count;
            $query = new WP_Query(array(
              'post_type' => 'menu_item',
              'category_name' => $cat_slug,
            ));?>
          <div class="tab-pane fade single-member" id="<?php echo $cat_slug;?>" role="tabpanel" aria-labelledby="<?php echo $cat_slug;?>-tab">
            <div class="row"> <?php
              if( $query->have_posts() ):
                while( $query->have_posts() ): $query->the_post();?>
                  <div class="col-sm-6 col-lg-6"> 
                    <div class="single_food_item media">
                      <div class="mr-3"><?php the_post_thumbnail('thumbnail');?></div>
                        <div class="media-body align-self-center">
                          <h3><?php the_title();?></h3>
                          <h5>$40.00</h5>
                        </div>
                      </div>
                    </div> <?php
                  endwhile;
                endif;?>
              </div>
            </div> <?php
          endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>
