<?php
/*
* Template Name: Tickleseat Home Page
*/
?>
<?php get_header();?>
<div class="container-fluid" style="padding:0;">
  <!-- FIRST SECTION -->
  <div class="container-fluid" id="first-sec" style="position:relative;background:url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/leatherbg.jpg') 50% 50%;">
    <div class="container" id="first-sec-con">
      <div class="row-fluid">
        <div style="display:block;margin:0 auto;margin-top:10%;padding-bottom:60px;">
          <div class="row-fluid"> <img src="<?php echo g_img('congratulations.png');?>" class="col-xs-12 pb-30"> </div>
          <div class="col-xs-8 col-xs-offset-2">
            <div class="row-fluid" style="display: block;margin: 0 auto;width:auto;padding:10px 30px;background-color:rgba(0,0,0,0.6);border-left:5px solid #eb1c5c;">
              <h1 style="color:white;font-weight:100;text-align:center;font-size:40px;margin:0;">Introducing the TickleSeat</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid g-kf">
<style>
@-webkit-keyframes g-top{
	0% {
		background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2016/01/1-1.png') no-repeat 0% 0% / 100% 100%;
	}
	33% {
		background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2016/01/2-1.png') no-repeat 0% 0% / 100% 100%;
	}
	66% {
		background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2016/01/3-1.png') no-repeat 0% 0% / 100% 100%;
	}
  	100% {
		background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2016/01/1-1.png') no-repeat 0% 0% / 100% 100%;
	}
}
.g-kf {
    width: 100%;
    /* margin-left: -15%; */
    /* padding: 150px 0px 90px; */
    -webkit-transform:skewY(2deg) !important;
font-family: 'open sans';
    height: 470px;
    margin: auto 0px;
    margin-top: 30px;
    -webkit-transition: display 1s,
	transition-delay: display 0.2s;

	-webkit-animation-name: g-top;
	-webkit-animation-duration: 2s;
    -webkit-animation-iteration-count: infinite;
    -webkit-animation-direction: normal;
	-webkit-animation-timing-function: linear;
    -webkit-animation-fill-mode: initial;
}
</style>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-4">
<?php
// class Instagram {
//     public static $result;
//     public static $display_size = 'thumbnail'; // you can choose between "low_resolution", "thumbnail" and "standard_resolution"
//     public static $access_token = "DEFAULTACCESSTOKEN"; // default access token, optional
//     public static $count = 10;
//     public static function fetch($url){
//         $ch = curl_init();
//         curl_setopt($ch, CURLOPT_URL, $url);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//         curl_setopt($ch, CURLOPT_TIMEOUT, 20);
//         $result = curl_exec($ch);
//         curl_close($ch);
//         return $result;
//     }
//     function __construct($Token=null){
//         if(!empty($Token)){
//             self::$access_token = $Token;
//
//             // Remove from memory -- not sure if really needed.
//             $Token = null;
//             unset($Token);
//         }
//         self::$result = json_decode(self::fetch("https://api.instagram.com/v1/users/self/media/recent?count=" . self::$count . "&access_token=" . self::$access_token), true);
//     }
// }
// // $Instagram = new Instagram('ACCESSTOKENIFCHANGEDORNULLOREMPTY');
// $Instagram = new Instagram('2009518562.1654d0c.4a7176f0c12a4414b40be4b113c073ff');
//
// // print_r(Instagram::$result);
// foreach ($Instagram::$result['data'] as $photo) {
//   // print_r($photo);
//     $img = $photo['images']->{$Instagram::$display_size};
//   echo var_dump($photo['images']);
// }

?>
            <?php echo do_shortcode("[huge_it_videogallery id='3']"); ?>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!--
************************************************
* Rev Slider 1
************************************************
 -->
 <div class="container-fluid" style="padding: 120px 10px 150px;background: url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/bg1.png') no-repeat 0% 0% / cover;margin-bottom: -60px;margin-top: -60px;">
  <div class="container">
    <div class="row-fluid"> <img src="<?php echo g_img('whysoawesome.png');?>" class="col-xs-12 pb-30"> </div>
      <div class="row-fluid">
<style>
#rev_slider_3_1_wrapper .hephaistos.tparrows, #rev_slider_3_1_wrapper .hesperiden.tparrows {
  margin-left: 10px;
  cursor: pointer;
  background: #000;
  background: rgba(0,0,0,0.5);
  width: 110px !important;
  height: 40px;
  position: absolute;
font-family: 'open sans';
  display: flex !important;
  z-index: 100;
  border-radius: 8px !important;
  top: 73% !important;
}
.hephaistos.tparrows.tp-leftarrow:before {
  content: "\e82c \ Previous" !important;
  font-family:'revicons','open sans';
  padding-left:10px;
}
.hephaistos.tparrows.tp-rightarrow:before{
  content: "Next \e82d" !important;
  /* transform: matrix(1, 0, 0, 1, -140, -20); */
  font-family:'revicons','open sans';
  padding-left: 27.5px;
  /* right: -43px; */
  left: 100%;
}
  </style>
        <?php echo do_shortcode("[rev_slider alias='home']"); ?>
      </div>
    </div>
  </div>
</div>
<!--
***********************************************
* SAVES LIVES
***********************************************
 -->
  <div class="container-fluid" style="padding: 90px 10px 160px !important;background:white;margin-top: -60px;margin-bottom: -60px;">
  <!-- <div id="secSetup" class="container&#45;fluid" style="margin&#45;top:&#45;65px;padding: 190px 15px;background: url('<?php echo get_site_url();?>/wp&#45;content/uploads/2016/01/bg2.png') no&#45;repeat 0% 0% / cover;"> -->
    <div class="container">
      <div class="row-fluid"> <img src="<?php echo g_img('saveslivestitle.png');?>" class="col-xs-12 pb-30"> </div>
      <div class="row-fluid">
<style>
#rev_slider_1_2_wrapper .hephaistos.tparrows, #rev_slider_1_2_wrapper .hesperiden.tparrows {
  cursor: pointer;
  background: #000;
  background: rgba(0,0,0,0.5);
  width: 110px !important;
  height: 40px;
  position: absolute;
font-family: 'open sans';
  display: flex !important;
  z-index: 100;
  border-radius: 8px !important;
  top: 110% !important;
}
.hephaistos.tparrows.tp-leftarrow:before {
  content: "\e82c \ Previous" !important;
  font-family:'revicons','open sans';
  padding-left:10px;
}
.hephaistos.tparrows.tp-rightarrow:before{
  content: "Next \e82d" !important;
  /* transform: matrix(1, 0, 0, 1, -140, -20); */
  font-family:'revicons','open sans';
  padding-left: 27.5px;
  /* right: -43px; */
  left: 100%;
}
  </style>
        <?php echo do_shortcode("[rev_slider alias='home_1']"); ?>
      </div>
    </div>
  </div>

<!--
***********************************************
Duplicate
***********************************************
************************************************
* Rev Slider 3: id="rev_slider_4_3_wrapper"
************************************************
 -->
<div class="container-fluid" style="padding: 90px 10px 160px;background: url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/bg1.png') no-repeat 0% 0% / cover;margin-bottom: -60px;margin-top: -60px;">
  <div class="container">
    <div class="row-fluid"> <img src="<?php echo g_img('whysoawesome.png');?>" class="col-xs-12 pb-30"> </div>
      <div class="row-fluid">
<style>
#rev_slider_4_3_wrapper .hephaistos.tparrows, #rev_slider_4_3_wrapper .hesperiden.tparrows {
  cursor: pointer;
  background: #000;
  background: rgba(0,0,0,0.5);
  width: 110px !important;
  height: 40px;
  position: absolute;
  font-family: 'open sans';
  display: flex !important;
  z-index: 100;
  border-radius: 8px !important;
  top: 110% !important;
}
.hephaistos.tparrows.tp-leftarrow:before {
  content: "\e82c \ Previous" !important;
  font-family:'revicons','open sans';
  left:0px !important;
  /* margin-left: 10px; */
  padding-left:10px;
}
.hephaistos.tparrows.tp-rightarrow:before{
  content: "Next \e82d" !important;
  /* transform: matrix(1, 0, 0, 1, -140, -20); */
  font-family:'revicons','open sans';
  padding-left: 27.5px;
  /* right: -43px; */
  left: 100%;
}
  </style>
        <?php echo do_shortcode("[rev_slider alias='home_3']"); ?>
      </div>
    </div>
  </div>
</div>
<!--
***********************************************
* Rev Slider 4: id="rev_slider_5_4_wrapper"
***********************************************
 -->
<div class="container-fluid" style="padding: 90px 10px 160px !important;background:white;margin-top: -60px;margin-bottom: -60px;">
  <!-- <div id="secSetup" class="container&#45;fluid" style="margin&#45;top:&#45;65px;padding: 190px 15px;background: url('<?php echo get_site_url();?>/wp&#45;content/uploads/2016/01/bg2.png') no&#45;repeat 0% 0% / cover;"> -->
    <div class="container">
      <div class="row-fluid"> <img src="<?php echo g_img('saveslivestitle.png');?>" class="col-xs-12 pb-30"> </div>
      <div class="row-fluid">
<style>
#rev_slider_5_4_wrapper .hephaistos.tparrows, #rev_slider_5_4_wrapper .hesperiden.tparrows {
  cursor: pointer;
  background: #000;
  background: rgba(0,0,0,0.5);
  width: 110px !important;
  height: 40px;
  position: absolute;
  font-family: 'open sans';
  display: flex !important;
  z-index: 100;
  border-radius: 8px !important;
  top: 110% !important;
}
.hephaistos.tparrows.tp-leftarrow:before {
  content: "\e82c \ Previous" !important;
  font-family:'revicons','open sans' !important;
  left:0px !important;
  padding-left:10px;
}
.hephaistos.tparrows.tp-rightarrow:before{
  content: "Next \e82d" !important;
  /* transform: matrix(1, 0, 0, 1, -140, -20); */
  left: 100%;
  font-family:'revicons','open sans' !important;
  padding-left: 27.5px;
  /* right: -43px; */
}
  </style>
        <?php echo do_shortcode("[rev_slider alias='home_4']"); ?>
      </div>
    </div>
  </div>
</div>
<!--
***********************************************
END OF Duplicate
***********************************************
-->
  <div class="container-fluid" style="padding: 100px 10px 160px;background: url('http://192.185.175.151/~tickleseat/wp-content/uploads/2015/11/bg1.png') no-repeat 0% 0% / cover;">
    <div class="container">
      <a href="javascript:void(0);" style="cursor:pointer !important;">
       <img src="<?php echo g_img('science.png');?>" class="fw">
      </a>
    </div>
  </div>
  <!-- SCIENCE -->
  <!-- USING -->
  <div id="secSetup" class="container-fluid" style="padding: 100px 10px 160px;background: url('<?php echo get_site_url();?>/wp-content/uploads/2016/01/bg2.png') no-repeat 0% 0% / 100% 100%;margin-top:-60px;">
    <div class="container">
      <div class="row-fluid">
        <div class="col-xs-8 col-xs-offset-2 pb-30" style="">
          <img src="<?php echo g_img('using.png');?>" class="fw">
        </div>
      </div>
    </div>
  </div>
  <!-- testimononials -->
    <!-- SIX SECTION -->
    <div class="container-fluid" style="padding: 100px 10px 160px;background: url('<?php echo get_site_url();?>/wp-content/uploads/2015/11/bg4.png')no-repeat 0% 0% / 100% 100%;margin-top:-60px;">
      <div class="container">
        <div class="row-fluid">
          <div class="col-xs-6" class="padding-left:0px;padding-right:0px;margin-left:-10em;">
            <img src="<?php echo get_site_url();?>/wp-content/uploads/2016/01/product.png">
          </div>
          <div class="col-xs-6" style="margin-top:20px;padding-right:0px;">
            <p style="font-weight:300;padding:0 15px;border-left:6px solid #eb1c5c;display: inline-block;font-size:40px;margin:0;">GET IT NOW</p>
            <p style="font-weight:300;font-size:15px;margin-top:15px;line-height: 2;margin-left:20px;">Tired of always striking out? It's time to finally try something new and effective! The Tickleseat sparks a woman's desire, creating a much greater likelihood for a hookup. Don't get lucky, get smart by taking your love life into your own hands. Put the TickleSeat to use and trigger a woman's most primal desire!</p>
            <p style="float:right;color:#eb1c5c;font-size:60px;margin-bottom:10px;font-weight:300;">$199</p>
            <br>
            <a class="show-quickly" data-prodid="52" >
              <button class="g-btn show-quickly" style="color:#E6E1E0;border-radius:8px;background:#eb1c5c;width:100%;font-size:30px;padding:15px 15px;font-weight:300;font-family:'Open Sans';">ORDER NOW</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- SEVENTH SECTION -->
<div class="container-fluid" style="background:white;padding:100px 10px 160px;margin-top:-60px;">
  <div class="container">
    <div class="row-fluid">
      <h1 style="margin-bottom:30px;text-align: center;font-size:50px;font-weight:300;"><img style="margin-top:-9px;margin-right:20px;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/12/logoblk.png"><i class="fa fa-video-camera fa-lg"></i></h1>
      <?php echo do_shortcode("[huge_it_videogallery id='4']"); ?>
    </div>
    <div class="row-fluid">
      <h1 style="margin-bottom:30px;text-align: center;font-size:50px;font-weight:300;"><img style="margin-top:-9px;margin-right:20px;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/12/logoblk.png"><i class="fa fa-instagram fa-lg"></i></h1>
              <?php echo do_shortcode('[fts_instagram instagram_id=2009518562 type=user]');?>
    </div>
  </div>
</div>
<style>
  #navigation {
    position: absolute;
  }

.fts-instagram {
    height: 180px;
    overflow: hidden;
}
</style>
<?php get_footer();?>


