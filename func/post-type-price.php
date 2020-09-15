<?php

//Price
	register_post_type('pricing', array(
	 'labels' => array(
	    'name' => 'Pricing',
		'add_new_item' => 'Add New Price',
		'featured_image' => 'Upload or Update Gallery Image (550x500)',
		'set_featured_image' => 'Set Gallery Image',
	 ),
	 'public' => true,
	 'show_in_menu' => true,
	 'menu_position' => 22,
	 'menu_icon' => 'dashicons-chart-line',
	 'supports' => array('title', 'editor')
	));

?>