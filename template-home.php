<?php
/*
* Template Name: Home Page
*/
?>
<?php get_header();?>
<div class="container-fluid" style="padding:0;">
  <!-- FIRST SECTION -->
  <div class="container-fluid" id="first-sec" style="position:relative;background:url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/leatherbg.jpg') 50% 50%;">
    <div class="container" id="first-sec-con">
      <div class="row-fluid">
        <div style="display:block;margin:0 auto;margin-top:10%;padding-bottom:30px;">
          <div class="row-fluid"> <img src="<?php echo g_img('congratulations.png');?>" class="col-xs-12 pb-30"> </div>
          <div style="display: block;margin: 0 auto;width:530px;padding:10px 30px;background-color:rgba(0,0,0,0.6);border-left:5px solid #eb1c5c;">
            <h1 style="color:white;font-weight:100;text-align:center;font-size:40px;margin:0;">Introducing the TickleSeat</h1>
          </div>
          <!-- <p class="" style="text&#45;align: center;color:white;font&#45;size:18px;font&#45;weight:600;">Your Wingman to get her in the mood.</p> -->
        </div>
      </div>
      <div class="row-fluid" style="background:url(<?php echo g_img('top2.png');?>)no-repeat 0% 0% / cover;width: 130%;margin-left: -15%;padding: 150px 0px 90px;">
        <div class="col-xs-6">
          <!-- <div style="width:100%;height:200px;background: grey;"> -->
          <!-- </div> -->
        </div>
        <div class="col-xs-6">
          <div style="max-width: 100%;">
            <?php echo do_shortcode("[huge_it_videogallery id='3']"); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SECOND SECTION -->
<div class="container-fluid" style="padding: 150px 0px 100px;margin-top:-50px;background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2015/11/bg1.png') no-repeat 0% 0% / cover;margin-bottom: 50px;">
  <div class="container">
    <div class="row-fluid"> <img src="<?php echo g_img('whysoawesome.png');?>" class="col-xs-12 pb-30"> </div>
    <div class="row-fluid">
      <?php echo do_shortcode("[rev_slider alias='home']"); ?>
<style>
.hephaistos.tparrows {
  cursor: pointer;
  background: #000;
  background: rgba(0,0,0,0.5);
  width: 110px !important;
  height: 40px;
  position: absolute;
  display: flex !important;
  z-index: 100;
  border-radius: 8px !important;
  top: 73% !important;
}
.hephaistos.tparrows.tp-leftarrow:before {
  content: "\e82c \ Previous" !important;
  margin-left: 10px;
}
.hephaistos.tparrows.tp-rightarrow:after {
  content: "Next \e82d";
  transform: matrix(1, 0, 0, 1, -140, -20);
  right: -43px;
  left: 100%;
}
  </style>
    </div>
    <!-- <div class="row&#45;fluid"> -->
    <!--   <div class="slick&#45;slider single&#45;item&#45;rtl slick&#45;initialized slick&#45;slider">  -->
    <!--     <div aria&#45;live="polite" class="slick&#45;list draggable"> -->
    <!--       <div class="slick&#45;track" style="opacity: 1; width: 9600px; left: &#45;1170px;" role="listbox"> -->
    <!--         <div class="slick&#45;slide slick&#45;cloned" data&#45;slick&#45;index="&#45;1" aria&#45;hidden="false" tabindex="&#45;1" style="width: 1200px;" > -->
    <!--           <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--         </div> -->
    <!--         <div class="slick&#45;slide slick&#45;current slick&#45;active" data&#45;slick&#45;index="0" aria&#45;hidden="false" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide00" style="width: 1200px;"> -->
    <!--           <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide" data&#45;slick&#45;index="1" aria&#45;hidden="true" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide01" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide" data&#45;slick&#45;index="2" aria&#45;hidden="true" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide02" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide" data&#45;slick&#45;index="3" aria&#45;hidden="true" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide03" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide" data&#45;slick&#45;index="4" aria&#45;hidden="true" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide04" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide" data&#45;slick&#45;index="5" aria&#45;hidden="true" tabindex="&#45;1" role="option" aria&#45;describedby="slick&#45;slide05" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--       <div class="slick&#45;slide slick&#45;cloned" data&#45;slick&#45;index="6" aria&#45;hidden="true" tabindex="&#45;1" style="width: 1200px;"> -->
    <!--         <img src="<?php echo g_img('whysoawesome&#45;slide1.png');?>"> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--   </div> -->
    <!-- </div> -->
  </div>
</div>
<script>


</script>
<!-- SAVES LIVES  -->asdf
<!-- <div class="container&#45;fluid" style="padding: 0px 15px 150px;background:url('http://192.185.175.151/~tickleseat/wp&#45;content/uploads/2015/11/bg4.png')no&#45;repeat 50% 0% / cover;"> -->
<div class="container-fluid" style="padding: 0px 15px 150px;background:white;">
  <div class="container">
    <div class="row-fluid"> <img src="<?php echo g_img('saveslivestitle.png');?>" class="col-xs-12 pb-30"> </div>
    <div class="row-fluid">
<!--       <?php echo do_shortcode("[rev_slider alias='home_1']"); ?> -->
    </div>
    <!-- <div class="row&#45;fluid"> <img src="<?php echo g_img('saveslives&#45;slide1.png');?>" class="col&#45;xs&#45;12 pb&#45;30"> </div> -->
    <!-- <div class="row&#45;fluid"> <img src="<?php echo g_img('saves&#45;lives&#45;slide2.png');?>" class="col&#45;xs&#45;12 pb&#45;30"> </div> -->
  </div>
</div>
<div class="container-fluid" style="padding: 150px 0px 100px;margin-top:-50px;background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2015/11/bg1.png') no-repeat 0% 0% / cover;">
  <div class="container">
    <div class="row-fluid"> <img src="<?php echo g_img('science.png');?>" class="col-xs-12 pb-30"> </div>
  </div>
</div>
<!-- SCIENCE -->
<!-- <div class="container&#45;fluid" style="transform:scaleX(&#45;1);padding: 150px 0px 100px;margin&#45;top:&#45;50px;background: url('http://192.185.175.151/~tickleseat/wp&#45;content/uploads/2015/11/bg1.png') no&#45;repeat 0% 0% / cover;margin&#45;bottom: 50px;"> -->
<!--   <div class="container" style="transform:scaleX(&#45;1);"> -->
<!--   </div> -->
<!-- </div> -->
<!-- USING -->
<div id="secSetup" class="container-fluid" style="margin-top:-65px;padding: 190px 15px;background: url('<?php echo get_site_url();?>/wp-content/uploads/2015/12/bg2a.png') 50% 1%;background-size:cover;">
  <div class="container">
    <div class="row-fluid">
      <div class="col-xs-7 pb-30" style="margin-left:-190px;">
        <img src="<?php echo g_img('using.png');?>" class="fw">
      </div>
    </div>
  </div>
</div>
<!-- testimononials -->
<!-- <div class="container&#45;fluid" style="padding:190px 15px;margin&#45;top:&#45;50px;background: url('<?php echo get_site_url();?>/wp&#45;content/uploads/2015/11/bg1.png');background&#45;size:cover;"> -->
<!--   <div class="container"> -->
<!--     <div class="row&#45;fluid" style="position: relative;"> -->
<!--       <div class="col&#45;xs&#45;8"> -->
<!--             <p class="fs&#45;35 fw&#45;300 p&#45;15 blr d&#45;ib mb&#45;35" >PROBLEM:</p><h1 class="c&#45;dg d&#45;ib fs&#45;55 fw&#45;300 ml&#45;10 mt&#45;10" style="vertical&#45;align:top; ">FRIEND&#45;ZONE</h1><br> -->
<!--             <p style="font&#45;size: 35px;font&#45;weight:300;padding:15px 15px;border&#45;left:6px solid #eb1c5c;display: inline&#45;block;">SOLUTION:</p><img style="width:68%;display:inline&#45;block;vertical&#45;align: middle;margin&#45;top:&#45;16px;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/logoblk.png"> -->
<!--             <p style="margin: 35px 0;font&#45;weight:300;font&#45;size:15px;max&#45;width: 500px;line&#45;height: 2;margin&#45;left:20px;">It's a tale as old as time, guy meets girl, guy feels an instant attraction towards girl and wants to try to take that relationship to  the next level...the girl unfortunately, doesn't quite feel the same way and ends up putting the guy in the friend&#45;zone, which is where our story ends... Or at least, that's where the story used to end.</p> -->
<!--             <div style="text&#45;align: center;"> -->
<!--            <a style="color:gray;" href="#secSetup"><i style="font&#45;size:90px;" class="fa fa&#45;angle&#45;double&#45;down"></i></a> -->
<!--             </div> -->
<!--       </div> -->
<!--  -->
<!--         <img style="width: 50%;position: absolute;right:0;" src="<?php //echo get_site_url();?>/wp&#45;content/uploads/2015/12/seat.png"> -->
<!--  -->
<!--     </div> -->
<!--   </div> -->
<!-- </div> -->
<!-- THE CHART -->
    <!-- <div class="container&#45;fluid" style="padding:100px 0 200px 0;height:2081px;"> -->
    <!--   <div class="container"> -->
    <!--     <p class="fs&#45;35 fw&#45;300 p&#45;10 blr d&#45;ib mb&#45;25">WHY USE TICKLESEAT?</h1> -->
    <!--       <br> -->
    <!--       <p style="text&#45;align: center;margin&#45;bottom:100px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt consectetur adipiscing elit, sed do -->
    <!--         <br> eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p> -->
    <!--   </div> -->
    <!--   <div class="container" style="padding:40px 0;"> -->
    <!--     <div style="position: relative;"> -->
    <!--       <img style="position: absolute;z&#45;index:9;margin:auto;left:calc(6% &#45; 28px);right:0;top:calc(100% &#45; &#45;200px);" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/face.png"> -->
    <!--       <div class="col&#45;xs&#45;6" style="background: rgb(232,75,123);padding:100px 30px 50px 30px;width:49.5%;position:relative;"> -->
    <!--         <h1 style="position:absolute;left:0;right:0;top:&#45;30px;color:rgb(232,75,123);font&#45;size:35px;font&#45;weight:300;padding:10px 0;background: rgb(240,241,243);width:70%;margin:0 auto;text&#45;align: center;border&#45;radius:30px;box&#45;shadow:0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;webkit&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;moz&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;o&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);">With TickleSeat</h1> -->
    <!--         <img style="display: inline&#45;block;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_purchase.png"> -->
    <!--         <p style="display:inline&#45;block;vertical&#45;align: middle;margin:0 0 0 20px;font&#45;size:18px;color:white;">Purchase a TickleSeat Online -->
    <!--           <br><strong style="font&#45;size:22px;">$199</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(20% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_setup.png"> -->
    <!--         <p style="display:inline&#45;block;vertical&#45;align: middle;margin:0 0 0 20px;font&#45;size:18px;color:white;">Set up TickleSeat -->
    <!--           <br><strong style="font&#45;size:22px;">2 minutes</strong></p> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(20% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_breaktheice.png"> -->
    <!--         <p style="display:inline&#45;block;vertical&#45;align: middle;margin:0 0 0 20px;font&#45;size:18px;color:white;">Break the Ice with -->
    <!--           <br>the TickleSeat -->
    <!--           <br><strong style="font&#45;size:22px;">1 minute</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(20% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_showoff.png"> -->
    <!--         <p style="display:inline&#45;block;vertical&#45;align: middle;margin:0 0 0 20px;font&#45;size:18px;color:white;">Showing your date ALL the -->
    <!--           <br>features the TickleSeat has -->
    <!--           <br>to offer -->
    <!--           <br><strong style="font&#45;size:22px;">5 minutes</strong></p> -->
    <!--         <div style="width:80%;float:left;background: white;margin&#45;left: &#45;30px;margin&#45;top:250px;border&#45;top&#45;right&#45;radius:25px;border&#45;bottom&#45;right&#45;radius:25px;"> -->
    <!--           <h1 style="font&#45;size: 30px;text&#45;align: center;font&#45;weight:300;padding:15px 0;margin&#45;left:60px;">Total Cost = <stron style="font&#45;weight:600;color:rgb(232,75,123);">$270</stron></h1> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--       <!&#45;&#45; RIGHT &#45;&#45;> -->
    <!--       <div class="col&#45;xs&#45;6" style="background: rgb(218,218,218);padding:100px 30px 50px 30px;float:right;width:49.5%;height:1235px;position:relative;"> -->
    <!--         <h1 style="position:absolute;left:0;right:0;top:&#45;30px;color:rgb(232,75,123);font&#45;size:35px;font&#45;weight:300;padding:10px 0;background: rgb(240,241,243);width:70%;margin:0 auto;text&#45;align: center;border&#45;radius:30px;box&#45;shadow:0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;webkit&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;moz&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);&#45;o&#45;box&#45;shadow: 0.5px 1.2px 1.5px rgb(46, 46, 46);">Without TickleSeat</h1> -->
    <!--         <img style="display: inline&#45;block;float:right;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_flowers.png"> -->
    <!--         <p style="display:inline&#45;block;margin:35px 20px 0 0;font&#45;size:18px;color:black;float:right;">Flowers -->
    <!--           <br><strong style="font&#45;size:22px;float:right;">$40</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(93% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;float:right;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_wine.png"> -->
    <!--         <p style="display:inline&#45;block;margin:35px 20px 0 0;font&#45;size:18px;color:black;float:right;">Bottle of Red Wine -->
    <!--           <br><strong style="font&#45;size:22px;float:right;">$60</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(93% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;float:right;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_oysters.png"> -->
    <!--         <p style="display:inline&#45;block;margin:35px 20px 0 0;font&#45;size:18px;color:black;float:right;">Oysters -->
    <!--           <br><strong style="font&#45;size:22px;float:right;">$30</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(93% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;float:right;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_meal.png"> -->
    <!--         <p style="display:inline&#45;block;margin:35px 20px 0 0;font&#45;size:18px;color:black;float:right;">Romantic Meal -->
    <!--           <br><strong style="font&#45;size:22px;float:right;">$75</strong></p> -->
    <!--         <br> -->
    <!--         <h1 style="color:white;margin&#45;bottom:10px;margin&#45;left:calc(93% &#45; 47px);">.<br>.<br>.</h1> -->
    <!--         <img style="display: inline&#45;block;float:right;" src="<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/image_nightout.png"> -->
    <!--         <p style="display:inline&#45;block;margin:35px 20px 142px 0;font&#45;size:18px;color:black;float:right;">Night Out on the Town -->
    <!--           <br><strong style="font&#45;size:22px;float:right;">$65</strong></p> -->
    <!--         <br> -->
    <!--         <div style="width:80%;float:right;background: white;border&#45;top&#45;left&#45;radius:25px;border&#45;bottom&#45;left&#45;radius:25px;position:absolute;bottom:50px;right:0;"> -->
    <!--           <h1 style="font&#45;size: 30px;text&#45;align: center;font&#45;weight:300;padding:15px 0;margin&#45;right:60px;">Total Cost = <stron style="font&#45;weight:600;">$270</stron></h1> -->
    <!--         </div> -->
    <!--       </div> -->
    <!--     </div> -->
    <!--   </div> -->
    <!--   <div class="container"> -->
    <!--     <p style="text&#45;align: center;margin&#45;top:50px;"><strong>The TickleSeat:</strong> Reuseable, cheaper AND more effective than a traditional date, what are you waiting for?</p> -->
    <!--     <button style="display:block;margin:0 auto;font&#45;size:30px;font&#45;weight:300;padding:25px 110px;border&#45;radius:6px;background:rgb(235, 28, 92);font&#45;family:'Open Sans';">GET IT NOW</button> -->
    <!--   </div> -->
    <!-- </div> -->
                      <!-- THIRD SECTION -->
                      <!-- <div id="secSetup" class="container&#45;fluid" style="margin&#45;top:&#45;65px;padding: 190px 15px;background: url('<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/bg2a.png') 50% 1%;background&#45;size:cover;"> -->
                      <!--   <div class="container"> -->
                      <!--     <div class="row&#45;fluid"> -->
                      <!--       <div class="col&#45;xs&#45;6"> -->
                      <!--       </div> -->
                      <!--       <div class="col&#45;xs&#45;6" style="margin&#45;top:50px;padding&#45;left:30px;"> -->
                      <!--         <p style="font&#45;weight:300;padding:0 15px;border&#45;left:6px solid white;display: inline&#45;block;font&#45;size:40px;margin:0;color:white;">THE SETUP</p> -->
                      <!--         <p style="margin: 35px 0;font&#45;weight:300;font&#45;size:15px;color:white;line&#45;height: 2;padding&#45;right:80px;margin&#45;left:20px;">Setting up the TickleSeat couldn't be simpler! Place the TickleSeat on the desired seat and attach the velcro pieces to ensure the perfect fit. The TickleSeat comes with a wall adapter and a cigarette lighter adapter, making it perfect for use at home or in the car. After you've selected the appropriate adapter, simply plug the TickleSeat in, grab the handheld remote and you're ready to roll!</p> -->
                      <!--       </div> -->
                      <!--     </div> -->
                      <!--   </div> -->
                      <!-- </div> -->
                      <!-- FOURTH SECTION -->
                      <!-- <div class="container&#45;fluid" style="padding: 190px 15px;background:white;margin&#45;top:&#45;50px;"> -->
                      <!--   <div class="container"> -->
                      <!--     <div class="row&#45;fluid"> -->
                      <!--       <div class="col&#45;xs&#45;6" style="margin&#45;top:20px;"> -->
                      <!--         <p style="font&#45;weight:300;padding:0 15px;border&#45;left:6px solid #eb1c5c;display: inline&#45;block;font&#45;size:40px;margin:0;">SURPRISE</p> -->
                      <!--         <p style="margin: 35px 0;font&#45;weight:300;font&#45;size:15px;color:black;line&#45;height: 2;margin&#45;left:20px;padding&#45;right:30px;">Relax your lady by first showing her the TickleSeat's back massage function, which will allow her to target her upper and lower back with the use of a remote control. Better yet, the TickleSeat even comes with a "Heat" function, to provide a glowing, warming, more relaxing back massage that is sure to set her mind and body at ease.</p> -->
                      <!--       </div> -->
                      <!--       <div class="col&#45;xs&#45;6"> -->
                      <!--       </div> -->
                      <!--     </div> -->
                      <!--   </div> -->
                      <!-- </div> -->
                      <!-- FIFTH SECTION -->
                      <!-- <div class="container&#45;fluid" style="padding: 190px 15px;background: url('<?php echo get_site_url();?>/wp&#45;content/uploads/2015/12/bg3a.png') 50% 1%;background&#45;size:cover;margin&#45;top:&#45;50px;"> -->
                      <!--   <div class="container"> -->
                      <!--     <div class="row&#45;fluid"> -->
                      <!--       <div class="col&#45;xs&#45;6" style="margin&#45;top:20px;"> -->
                      <!--             <p style="font&#45;weight:300;padding:0 15px;border&#45;left:6px solid white;display: inline&#45;block;font&#45;size:40px;margin:0;color:white;">THE TURN ON</p> -->
                      <!--             <p style="margin: 35px 0;font&#45;weight:300;font&#45;size:15px;color:white;line&#45;height: 2;padding&#45;right:40px;margin&#45;left:20px;">Ready for the main attraction? Select the "Seat" button to instantly provide your female companion with a stimulating, constant vibration beneath her, this vibration is meant to arouse her body, and trigger her lust. The vibrations of the TickleSeat range from low, medium to high, so the TickleSeat is sure to please each and every time.</p> -->
                      <!--       </div> -->
                      <!--       <div class="col&#45;xs&#45;6"> -->
                      <!--  -->
                      <!--       </div> -->
                      <!--     </div> -->
                      <!--   </div> -->
                      <!-- </div> -->
                      <!-- SIX SECTION -->
                      <div class="container-fluid" style="height:841px;padding: 190px 0;background: url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/bg4.png') 50% 1%;background-size:cover;margin-top:-50px;background-repeat: no-repeat;">
                        <div class="container">
                          <div class="row-fluid">
                            <div class="col-xs-6">
                            </div>
                            <div class="col&#45;xs&#45;6" style="margin&#45;top:20px;padding&#45;left:30px;">
                              <p style="font&#45;weight:300;padding:0 15px;border&#45;left:6px solid #eb1c5c;display: inline&#45;block;font&#45;size:40px;margin:0;">GET IT NOW</p>
                              <p style="font&#45;weight:300;font&#45;size:15px;margin&#45;top:15px;line&#45;height: 2;margin&#45;left:20px;">Tired of always striking out? It's time to finally try something new and effective! The Tickleseat sparks a woman's desire, creating a much greater likelihood for a hookup. Don't get lucky, get smart by taking your love life into your own hands. Put the TickleSeat to use and trigger a woman's most primal desire!</p>
                              <p style="float:right;color:#eb1c5c;font&#45;size:60px;margin&#45;bottom:10px;font&#45;weight:300;">$199</p>
                              <br>
                              <a class="show-quickly" data-prodid="52">
                                <button class="g-btn" style="color:#E6E1E0;border-radius:8px;background:#eb1c5c;width:100%;font&#45;size:30px;padding:15px 15px;font&#45;weight:300;font&#45;family:'Open Sans';">ORDER NOW</button>
                              </a>
                            </div>
                          </div>
        <!-- <div class="col-xs-12" style="margin-top:20px;padding-left:30px;">
        <p class="blr fw-300 pl-15 pr-15 d-ib fs-40 mlr-a">why use tickleseat</p>
        <p class="fw-300 fs-15 mt-15 lh-2 ml-20" >Tired of always striking out? It's time to finally try something new and effective! The Tickleseat sparks a woman's desire, creating a much greater likelihood for a hookup.  Don't get lucky, get smart by taking your love life into your own hands. Put the TickleSeat to use and trigger a woman's most primal desire!</p>
        <div class="row-fluid mtb-50 p-rel">
          <div class="d-ib p-rel" style="height:auto; min-height:700px;background:#E24D7E !important;width:49.5%;">
            <div class="span6 p-abs lh-2 a-center ts-w-btn"> With TickleSeat </div>
          </div>
          <div class="d-ib p-rel" style="height:auto; min-height:700px;background:#D9DADB !important;width:49.5%;">
            <div class="span6 p-abs lh-2 a-center ts-p-btn"> With TickleSeat </div>
          </div>
        </div>
      </div> -->
        <!-- <p class="fl-r c-dg fs-60 mb-10 fw-300">$199</p>
        <button style="background:#eb1c5c;width:100%;font-size:30px;padding:15px 15px;font-weight:300;font-family:'lato';">ORDER NOW</button> -->
      </div>
    </div>
  </div>
</div>
<!-- SEVENTH SECTION -->
<div class="container-fluid" style="height:500px;background:white;padding:60px 15px;">
  <div class="container">
    <div class="row-fluid">
      <h1 style="margin-bottom:30px;text-align: center;font-size:50px;font-weight:300;"><img style="margin-top:-9px;margin-right:20px;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/12/logoblk.png">VIDEOS</h1>
      <?php echo do_shortcode("[huge_it_videogallery id='4']"); ?>
    </div>
  </div>
</div>
<?php //echo do_shortcode('[instagram-feed hashtag="#tickleseat"]');?>
<?php echo do_shortcode('[fts_instagram instagram_id=#tickles type=hashtag]');?>
</br>
</br>
</div>
<style>
  #navigation {
    position: absolute;
  }
.show-quickly {
  position: relative !important;
  bottom: 0;
  display: block;
  right: 0;
  opacity: 1 !important;
  text-transform: uppercase;
  padding: 2px;
  text-align: center;
  /* min-height:30px; */
  width: 100%;
  background-color: #FFF;
}

</style>
<?php get_footer();?>


