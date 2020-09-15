<?php
function aftertheme_default_functions() {
    
    // Add Title Tag   
    add_theme_support ('title-tag');
	
	//add_theme_support (title-tag);
	add_theme_support ('post-thumbnails');
		
	//excerpt
	function excerpt($limit){
		$content = preg_replace("/<img(.*?)>/si", "", get_the_content());
		//$post_content = explode(" " , get_the_content());
		$post_content = explode(" " , $content);
		$less_content = array_slice ($post_content, 0, $limit);
		echo implode (" ", $less_content);
	}	
	function tnews_custom_excerpt_length( $length ) {
    return 20;
    }
    add_filter( 'excerpt_length', 'tnews_custom_excerpt_length', 999 );
}
add_action('after_setup_theme' , 'aftertheme_default_functions');

//Load Nav Menu
register_nav_menus( array(
	'primary' => __( 'Primary Menu', '' ),
    'footer' => __( 'Footer Menu', '' ),
) );
require_once get_template_directory().'/func/NavMenuWalker.php';
require_once get_template_directory().'/func/WidgetNavMenu.php';

//Load framework
include_once get_template_directory(). '/framework/init.php';
include_once get_template_directory(). '/framework/options.php';

//Load Home Slider
include_once get_template_directory(). '/func/home_slider.php';

//Load Portfolio
include_once get_template_directory(). '/func/post-type-portfolio-items.php';

//Load Portfolio
include_once get_template_directory(). '/func/post-type-service.php';

//Load Gallery
//include_once get_template_directory(). '/func/post-type-gallery.php';

//Load Price
include_once get_template_directory(). '/func/post-type-price.php';

//Load Price
include_once get_template_directory(). '/func/post-type-testimonials.php';

//Load paginition

//include get_template_directory(). '/func/paginition.php';

//require_once get_template_directory(). '/vendor/loader.php';


//Load meta Fields

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/metafields/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/metafields/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
function my_acf_settings_show_admin( $show_admin ) {
    return false;
}




// widget 
function website_sidebar(){	

	register_sidebar(array(
	  'name' => 'Footer Widget',
	  'description' => 'Add your Footer Widgets',
	  'id' => 'footer_widget',
      'before_widget' => '<div class="col-sm-6 col-md-4 col-lg-4 col-6">',
	  'after_widget'  => '</ul></div>',
	  'before_title'  => '<div class="footer-menu-ttl">',
	  'after_title'   => '</div><ul class="footer-menu">',
    ));	
    
    
    	//register MegaMenu widget if the Mega Menu is set as the menu location
		$location = 'primary';
		$css_class = 'mega-menu-parent';
		$locations = get_nav_menu_locations();
		if ( isset( $locations[ $location ] ) ) {
		$menu = get_term( $locations[ $location ], 'nav_menu' );
			if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
				foreach ( $items as $item ) {
					if ( in_array( $css_class, $item->classes ) ) {
						register_sidebar( array(
						'id'   => 'mega-menu-item-' . $item->ID,
						'description' => 'Mega Menu items',
						'name' => $item->title . ' - Mega Menu',
						'before_widget' => '<div class="col-lg-3">',
						'after_widget' => '</div>', 
						'before_title'  => '<div class="megamenu-ttl">',
						'after_title'   => '</div>',
						));
					}
				}
			}
		}
    
    
    
 }
add_action('widgets_init' , 'website_sidebar');

//Shortcode Support
add_filter( 'widget_text', 'do_shortcode' );


//Remove all classes and IDs from Nav Menu
  function wp_nav_menu_remove($var) {
     return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
  }
  add_filter('page_css_class', 'wp_nav_menu_remove', 100, 1);
  add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);
  add_filter('nav_menu_css_class', 'wp_nav_menu_remove', 100, 1);
  







