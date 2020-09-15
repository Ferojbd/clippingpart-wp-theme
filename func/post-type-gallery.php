<?php

//Gallery 
	register_post_type('gallery', array(
	 'labels' => array(
	    'name' => 'Gallery',
		'add_new_item' => 'Add New Gallery',
		'featured_image' => 'Upload or Update Gallery Image (550x500)',
		'set_featured_image' => 'Set Gallery Image',
	 ),
	 'public' => true,
	 'show_in_menu' => true,
	 'menu_position' => 23,
	 'menu_icon' => 'dashicons-image-filter',
	 'supports' => array('title' , 'thumbnail')
	));



	//Portfolio Taxonomy
	register_taxonomy('gallery-category' ,'gallery', array(
         'labels' =>  array(
            'name' => 'Category',

         ),

         'public' => true,
         'hierarchical' => true,


	));

?>