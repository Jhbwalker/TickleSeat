<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device&#45;width"> -->
	<meta name="viewport" content="width=1400">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/jessonfoo/globalAtomic/master/global.css"/> -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>

  </header>
<div id="page-wrapper" class="container-fluid" style="position:relative;padding: 0px !important; min-width: 1280px;">

<div class="container-fluid" id="navigation" style="padding: 15px 0;width:100%;z-index:1;  background: url(http://192.185.175.151/~tickleseat/wp-content/uploads/leatherbg.jpg) no-repeat 50% 50% / 105% 156%;">
  <div class="container">
    <div class="row-fluid">
      <div class="col-xs-3">
        <img style="max-width:100%;" src="<?php echo get_site_url();?>/wp-content/uploads/2015/11/logo-1.png">
      </div>
      <div id="navbar" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <?php
wp_nav_menu(
  array(
    'theme_location' => 'header-menu',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'depth' => 4,
    'fallback_cb' => false,
  )
);
?>
      </div>
      <div class="col-xs-2 c-w">
        <div style="display: inline-block;width:30px;height:30px;background:#eb1c5c;border:1px solid #eb1c5c;border-radius:15px;"><i class="fa fa-facebook" style="font-size:20px;text-align:center;display:block;margin:0 auto;margin-top:5px;"></i></div>
        <div style="display: inline-block;width:30px;height:30px;background:#eb1c5c;border:1px solid #eb1c5c;border-radius:15px;margin-left:15px;">
          <i class="fa fa-twitter" style="font-size:20px;text-align:center;display:block;margin:0 auto;margin-top:5px;"></i>
          </div>
      </div>
    </div>
  </div>
</div>
