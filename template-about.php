<?php
/*
* Template Name: About Page
*/
?>

<?php get_header();?>
<div class="container-fluid" style="padding-top:130px;">
  <div class="container">
    <div class="row-fluid">
      <div class="col-xs-6" style="padding-top:40px;">
        <p style="font-size: 50px;font-weight:300;padding:4px 15px;border-left:6px solid #eb1c5c;display: inline-block;line-height: 1;margin-bottom:20px;">TICKLE TICKLE FOR <br> YOUR COO COO</p>
        <p style="margin-left:30px;font-weight:300;font-size:15px;max-width: 500px;line-height: 2;">Believe it or not, women are driven by desire just as much as men. So, if a man is able to stoke a woman's desire and have her directly associate that feeling of desire to him, his chances of sealing the deal will be greatly increased. This is where the TickleSeat comes in.
The object of your affection simply has to sit on the inconspicuous TickleSeat to experience the sensation of a heated, sensual massage that effectively targets the upper and lower back.
Ready to really turn the heat up? Select the "Seat" option to have the TickleSeat begin vibrating sensually beneath her. These vibrations and movements will tantalize her body and trigger her lust in a non-threatening, relaxed manner. Once her desire has been stoked, the rest is up to you!</p>
      </div>
      <div class="col-xs-6">
        <img style="max-width:100%;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/12/seat.png">
      </div>
    </div>
  </div>
</div>
  <!-- VIDEO SECTION -->
  <div class="container-fluid" style="height:500px;background:white;padding:60px 15px;">
    <div class="container">
      <div class="row-fluid">
        <h1 style="margin-bottom:30px;text-align: center;font-size:50px;font-weight:300;"><img style="margin-top:-9px;margin-right:20px;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/12/logoblk.png">VIDEOS</h1>
        <?php echo do_shortcode("[huge_it_videogallery id='4']"); ?>
      </div>
    </div>
  </div> 





<?php get_footer();?>