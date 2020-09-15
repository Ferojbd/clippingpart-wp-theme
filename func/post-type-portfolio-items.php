<?php

//Porfolio 
	register_post_type('portfolio', array(
	 'labels' => array(
	    'name' => 'Portfolio',
		'add_new_item' => 'Add New Portfolio',
		'featured_image' => 'Upload or Update Portfolio Image (550x500)',
		'set_featured_image' => 'Set Porfolio Image',
	 ),
	 'public' => true,
	 'show_in_menu' => true,
	 'menu_position' => 9,
	 'menu_icon' => 'dashicons-portfolio',
	 'supports' => array('title')
	));

/*
	add_post_type_support( 'portfolio', array(
       'excerpt',
    ) );


    add_filter( 'gettext', 'wpse22764_gettext', 10, 2 );
 
	
	function wpse22764_gettext( $translation, $original )
	{
	    if ( 'Excerpt' == $original ) 
	        {
	             return 'Excerpt'; //Change here to what you want Excerpt box to be called
	        }else
	        {
	             $pos = strpos($original, 'Excerpts are optional hand-crafted summaries of your');
	         
	              if ($pos !== false) 
	              {
	                  return  'Excerpt description here'; //Change the default text you see below the box with link to learn more...
	              }
	        }
	    return $translation;
	}
*/

	//Portfolio Taxonomy
	register_taxonomy('portfolio-category' ,'portfolio', array(
         'labels' =>  array(
            'name' => 'Category',

         ),

         'public' => true,
         'hierarchical' => true,


	));

?>