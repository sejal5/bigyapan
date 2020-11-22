<?php
require_once get_template_directory() .'/cs-framework/cs-framework.php';
require_once get_template_directory() .'/inc/framework.php';
require_once get_template_directory() .'/inc/navwalker.php';
require_once get_template_directory() .'/inc/customize.php';
require_once get_template_directory() .'/inc/metaboxes.php';
require_once get_template_directory() .'/inc/shortcode.php';
function bigyapan_scripts(){
	wp_enqueue_style('bigyapan-bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
wp_enqueue_style('bigyapan-bootstrap-theme', get_template_directory_uri(). '/css/bootstrap-theme.min.css');
wp_enqueue_style('bigyapan-ie10-viewport-bug-workaround', get_template_directory_uri(). '/css/ie10-viewport-bug-workaround.css');
wp_enqueue_style('bigyapan-simple-line-icons', get_template_directory_uri(). '/css/simple-line-icons.css');
wp_enqueue_style('bigyapan-style', get_template_directory_uri(). '/css/style.css');
wp_enqueue_style('bigyapan-catelists', get_template_directory_uri(). '/css/catelists.css');
wp_enqueue_style('bigyapan-brandlogo', get_template_directory_uri(). '/css/brandlogo.css');
wp_enqueue_style('bigyapan-animate', get_template_directory_uri(). '/css/animate.css');
wp_enqueue_style('bigyapan-jquery-ui', get_template_directory_uri(). '/css/jquery-ui.css');
wp_enqueue_style('bigyapan-jsCalender', get_template_directory_uri(). '/css/jsCalendar.css');

wp_enqueue_script('jquery-1.12.4', get_template_directory_uri(). '/js/jquery-1.12.4.min.js');
wp_enqueue_script('bootstrap.min', get_template_directory_uri(). '/js/bootstrap.min.js');
wp_enqueue_script('wow.min', get_template_directory_uri(). '/js/wow.min.js');
wp_enqueue_script('jquery-ui', get_template_directory_uri(). '/js/jquery-ui.js');
wp_enqueue_script('jsCalendar', get_template_directory_uri(). '/js/jsCalendar.js');
}
add_action( 'wp_enqueue_scripts', 'bigyapan_scripts' );
register_nav_menus( array(
'primary' => 'Main Menu',
'footer_menu' => 'Footer Menu',
) );
function cs_init() {
		$args = array(
			'public' => true,
			'label'  => 'Slider',
			'supports'=>array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-images-alt2'
		);
		register_post_type('slider',$args);
			
	$args = array(
'public' => true,
'label'  => 'Brand Logo',
'supports'=>array('title','editor','thumbnail'),
'menu_icon'           => 'dashicons-images-alt2',
);
register_post_type( 'brand logo', $args );
			


}


add_action('init','cs_init');
if( ! function_exists( 'cs_support' ) ) {
	function cs_support() {
	
	add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'cs_support' );


function custom_advertistment(){
	$args = array(
			'public' => true,
			'label'  => 'Advertistment',
			'supports'=>array('title','editor','thumbnail'),
			'menu_icon' => 'dashicons-cart',
							'taxonomies'		  => array(
		'topics', 'category',
				
				),
			);
register_post_type('advertistment',$args);
}
add_action('init','custom_advertistment');
?>


