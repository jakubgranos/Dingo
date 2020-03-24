<?php
/*
  Template for contact
  @package Dingo
*/
$heading = get_sub_field( 'heading' );
$subheading = get_sub_field( 'subheading' );
$backgorund = get_sub_field( 'backgorund' );
$contact_form = get_sub_field( 'contact_form' );?>

<style> <?php 
  if ( !empty( $heading ) ): ?>
    .regervation_part {
      background-image: url('<?php echo $backgorund?>');
    } <?php
  endif;?>
</style>
<section class="regervation_part section_padding">
  <div class="container">
    <div class="row">
      <div class="col-xl-5">
        <div class="section_tittle"> <?php 
          if( !empty($heading) ): ?>
            <p><?php echo $heading;?></p> <?php
          endif;

          if( !empty($subheading) ): ?>
            <h2><?php echo $subheading;?></h2> <?php
          endif;?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="regervation_part_iner">
          <?php echo $contact_form;?>
        </div>
      </div>
    </div>
  </div>
</section>
