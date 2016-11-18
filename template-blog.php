<?php
/*
* Template Name: Blog page
*/
?>

<?php get_header();?>

<div class="container-fluid" style="padding:30px 15px;">
  <div class="container">
    <div class="row-fluid">
      <div class="col-xs-9">
        <?php
 global $post;
 $myposts = get_posts('numberposts=5&categoryname=');
 foreach($myposts as $post) :
   setup_postdata( $post ); ?>
   <div class="row-fluid" id="posts">
   <div class="col-xs-4">
 <?php the_post_thumbnail();?>
 </div>
 <div class="col-xs-8">
 <h1 id="postTitle"><?php the_title(); ?></h1>
   <?php the_excerpt(); ?> 
  <div style="border-top:1px solid rgba(128, 128, 128,0.6);padding-top:9px;"> 
   <p id="postDate"><?php the_date(); ?> <?php the_time();?></p>
   <a href="<?php the_permalink(); ?>"><button id="postbttn">VIEW MORE</button></a>
  </div> 
 </div>
 </div>
 <?php endforeach; wp_reset_postdata(); ?>

      </div>
      <div class="col-xs-3">
        <?php echo do_shortcode('[widget widget_name="WP_Widget_Categories"]');?>
    </div>
  </div>
</div>



<?php get_footer();?>