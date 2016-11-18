<?php 
define('ETHEME_DOMAIN', 'legenda');
require_once( get_template_directory() . '/framework/init.php' );

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'movie', 'product' ) );
// require_once( get_template_directory() . '/framework/init.php' );
// define('ETHEME_DOMAIN', 'twentyfifteen');
// function theme_enqueue_styles() {
//     $parent_style = 'parent-style';
//     wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array( $parent_style )
//     );
// }
// function get_parent_functions(){
//   $parentLocation = get_template_directory_uri();
//   $func = $parentLocation . '/functions.php';
//   include $func;
// }
//
// // get_parent_functions();
// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// // add_theme_support
// add_action( 'after_setup_theme', 'register_my_menu' );
// function register_my_menu() {
//   register_nav_menu( 'primary', __( 'Primary Menu', 'mychildtheme' ) );
// }
// function register_my_menus() {
//   register_nav_menus(
//     array(
//       'header-menu' => __( 'Header Menu' ),
//       'extra-menu' => __( 'Extra Menu' )
//     )
//   );
// }
// add_action( 'init', 'register_my_menus' );
function get_img($str){
$imgUrl = get_site_url() . '/wp-content/uploads/2015/08/' . $str;
return $imgUrl;
}


// function widget($atts) {
//     
//     global $wp_widget_factory;
//     
//     extract(shortcode_atts(array(
//         'widget_name' => FALSE
//     ), $atts));
//     
//     $widget_name = wp_specialchars($widget_name);
//     
//     if (!is_a($wp_widget_factory->widgets[$widget_name], 'WP_Widget')):
//         $wp_class = 'WP_Widget_'.ucwords(strtolower($class));
//         
//         if (!is_a($wp_widget_factory->widgets[$wp_class], 'WP_Widget')):
//             return '<p>'.sprintf(__("%s: Widget class not found. Make sure this widget exists and the class name is correct"),'<strong>'.$class.'</strong>').'</p>';
//         else:
//             $class = $wp_class;
//         endif;
//     endif;
//     
//     ob_start();
//     the_widget($widget_name, $instance, array('widget_id'=>'arbitrary-instance-'.$id,
//         'before_widget' => '',
//         'after_widget' => '',
//         'before_title' => '',
//         'after_title' => ''
//     ));
//     $output = ob_get_contents();
//     ob_end_clean();
//     return $output;
//     
// }
// add_shortcode('widget','widget'); 
function g_img($str){ return get_site_url() . '/images/' . $str; }
