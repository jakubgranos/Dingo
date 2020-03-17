<?php
/*
  Template for menu list
  @package Dingo
*/
$cat_args = array(
  'orderby' => 'name',
);
$categories = get_categories( $cat_args );?>

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
            while( $query->have_posts() ): $query->the_post();
              $description = get_field( 'description' );
              $price = get_field( 'price' );?>
              <div class="col-sm-6 col-lg-6"> 
                <div class="single_food_item media">
                  <div class="mr-3"><?php the_post_thumbnail('thumbnail');?></div>
                  <div class="media-body align-self-center">
                    <h3><?php the_title();?></h3> <?php 
                    if( !empty( $description ) ):?>
                      <p><?php echo $description;?></p> <?php
                    endif;
                   
                    if( !empty( $price ) ):?>
                      <h5>$<?php echo $price;?>.00</h5> <?php
                    endif;?>
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
