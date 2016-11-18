<?php
/*
 * Template Name: Shop Page 
 */
get_header();
?>
  <div class="him full-width mh-500 pb-50" style="background:white;">
      <div class="container pb-50">
        <div style="width:1180px;margin:50px 0px 50px 0px !important;background:#E5E7E8;border-radius:8px;" class="row-fluid a-left bg-white">
          <div class="a-left span12 p-30">
            <?php while (have_posts()):the_post(); the_content(); endwhile;?>
          </div>
        </div>
      </div>
  <?php get_footer();?>
