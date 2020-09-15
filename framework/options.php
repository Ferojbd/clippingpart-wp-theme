<?php
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'my_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Configuration',
    'menu_slug'  => 'configuration',
    'menu_position'   =>  2,
    'ajax_save'       => true,
    'show_reset_all'  => false,
    'framework_title' => 'Software Control <small>by Riptware</small>',
    'theme'  => 'light',
  ) );


    // Custom


  CSF::createSection( $prefix, array(

    'title'  => 'Header section',
    'fields' => array(
      
      //Field Start
        array(
         'id'    => 'upload-logo',
         'type'  => 'media',
         'title' => 'Upload Logo',
         'desc'  => 'Logo size 130x40',
         //'url'   => false,
         'default' => array(
            'url'  => 'images/logo.png',
         ),
      ),

      array(
         'id'    => 'fb-link',
         'type'  => 'text',
         'title' => 'Facebook Link',
         'default' => 'http://facebook.com/',
      ),

      array(
         'id'    => 'twitter-link',
         'type'  => 'text',
         'title' => 'Twitter Link',
         'default' => 'http://twitter.com/',
      ),

      array(
         'id'    => 'linkedin-link',
         'type'  => 'text',
         'title' => 'Linkedin Link',
         'default' => 'http://linkedin.com/',
      ),


      array(
         'id'    => 'insagram-link',
         'type'  => 'text',
         'title' => 'Instagram Link',
         'default' => 'http://instagram.com/',
      ),
      
      array(
         'id'    => 'pinterest-link',
         'type'  => 'text',
         'title' => 'Pinterest Link',
         'default' => 'http://pinterest.com/',
      ),

       array(
         'id'    => 'youtube-link',
         'type'  => 'text',
         'title' => 'Youtube Link',
         'default' => 'http://youtube.com/',
      ),

      array(
         'id'    => 'skype-link',
         'type'  => 'text',
         'title' => 'Skype Link',
         'default' => 'skype:live.',
      ),

    )

     

  ));



  // Homepage

  CSF::createSection( $prefix, array(
  'id'    => 'homepage_fields',
  'title' => 'Homepage Section',
  'icon'  => 'fa fa-plus-circle',
  ) );

  //SubOption

  //Home Top Custom Service Section

  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Home Top Custom Service section',
    'fields' => array(
      array(
        'id' => 'homepage-top-service-grid',
        'title' => 'Grid column',
        'type'  => 'text',
        'default' => '3',
      ),
      array(
      'id'        => 'home-top-custom-service',
      'type'      => 'group',
      'title'     => 'Custom Service',
      'fields'    => array(
        
         //Service Article
          array(
              'id'    => 'home-top-custom-service-title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            array(
              'id'    => 'home-top-custom-service-desc',
              'type'  => 'textarea',
              'title' => 'Description',
              'media_buttons' => false,
              'quicktags' => false,
              'wpautop' => true,
            ),
            array(
              'id'    => 'home-top-custom-service-link',
              'type'  => 'text',
              'title' => 'Link',
            ),
            array(
              'id'    => 'home-top-custom-service-icon',
              'type'  => 'icon',
              'title' => 'Use Font Awesome Icon',
            ),
          ),
        ),
      ),
  ));    


  //Tab & Accodion Section
  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Company profile Section',
    'fields' => array(
      //Tab
      array(
      'id'        => 'home-tab-col',
      'type'      => 'group',
      'title'     => 'Tab Column',
      'fields'    => array(

           //Tab
            array(
              'id'    => 'tab-menu-title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            array(
              'id'    => 'tab-menu-desc',
              'type'  => 'wp_editor',
              'title' => 'Description',
              'media_buttons' => true,
            ),

            array(
              'id'    => 'tab-menu-icon',
              'type'  => 'icon',
              'title' => 'Font Awesome Icon',
            ),
          ),
      ), // End Tab

       //Accorsion
      array(
      'id'        => 'home-accordion-col',
      'type'      => 'group',
      'title'     => 'Accordion Column',
      'fields'    => array(

           //
            array(
              'id'    => 'accordion-menu-title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            array(
              'id'    => 'accordion-menu-desc',
              'type'  => 'wp_editor',
              'title' => 'Description',
              'media_buttons' => true,
            ),

            array(
              'id'    => 'accordion-menu-icon',
              'type'  => 'icon',
              'title' => 'Font Awesome Icon',
            ),
          ),
      ), // End Accordion

      
    )
 
 ));

//Special Content
  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Home Special Content section',
    'fields' => array(
        [
         'id'  => 'home_special_content',
         'type' => 'wp_editor',
        ],
     ),
  ));  



//  Home Partner

  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Home Partner section',
    'fields' => array(
      array(
      'id'        => 'home-partner',
      'type'      => 'group',
      'title'     => 'Partner Logo',
      'fields'    => array(
        
         //Partner Logo    

          array(
            'id'    => 'home-partner-name',
            'type'  => 'text',
            'title' => 'Partner Name',
          ),


          array(
            'id'    => 'home-partner-logo',
            'type'  => 'media',
            'title' => 'Upload Logo',
            'desc'  => 'Logo size 175x50',
            'url'   => false,
            'default' => array(
               'url' => 'images/default.png',
              ),
            ),       
          ),
        ),
      ),
  ));   
  

  //  Home Work Proccess

  CSF::createSection( $prefix, array(
    'parent' => 'homepage_fields',
    'title'  => 'Work Process section',
    'fields' => array(
      array(
      'id'        => 'home-work-processs',
      'type'      => 'group',
      'title'     => 'Work Process',
      'fields'    => array(
        
         //Work Process 

          array(
            'id'    => 'home-work-process-title',
            'type'  => 'text',
            'title' => 'Title',
          ),

          array(
              'id'    => 'home-work-process-icon',
              'type'  => 'icon',
              'title' => 'Font Awesome Icon',
          ),

          array(
            'id'    => 'home-work-process-logo',
            'type'  => 'media',
            'title' => 'Upload Logo',
            'desc'  => 'Logo size 175x50',
            'url'   => false,
            ),       
          ),
        ),
      ),
  ));   



}


?>