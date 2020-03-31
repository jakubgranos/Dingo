<?php
/*
  Theme footer
  @package Dingo
*/ 
$copyright = get_field( 'copyright', 'option' );?>
<div class="container">
  <?php require_once 'content.php';?>
  <div class="copyright_part_text">
    <div class="row">
      <div class="col-lg-8"> <?php 
        if( !empty( $copyright ) ):
          echo $copyright;
        endif;?>
      </div>
      <?php require_once 'social.php';?>
    </div>
  </div>
</div>


