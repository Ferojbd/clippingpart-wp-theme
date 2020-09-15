<?php

//slider 
	register_post_type('testimonial', array(
	 'labels' => array(
	    'name' => 'Testimonials',
		'add_new_item' => 'Add New Testimonial',
		'featured_image' => 'Upload or Update Client Photo',
		'set_featured_image' => 'Set Client Photo',
	 ),
	 'public' => true,
	 'show_in_menu' => true,
	 'menu_position' => 25,
	 'menu_icon' => 'dashicons-image-flip-horizontal',
	 'supports' => array('title' , 'editor', 'thumbnail'),
	));

//Change Enter Title Text
add_filter( 'enter_title_here', 'custom_enter_title' );
function custom_enter_title( $input ) {
    if ( 'testimonial' === get_post_type() ) {
        return __( 'Enter client Name', 'your_textdomain' );
    }

    return $input;
}

//Remove Tinymice

function my_post_type_editor_settings( $settings ) {

    global $post_type;

    if ( $post_type == 'testimonial' ) {

        $settings[ 'tinymce' ] = false;
        $settings[ 'media_buttons' ] = false;
    }

    return $settings;
}

add_filter( 'wp_editor_settings', 'my_post_type_editor_settings' );



?>