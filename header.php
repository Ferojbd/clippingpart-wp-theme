<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>
        <?php      
        if (is_home()) { 

            bloginfo('name'); echo ' | '; bloginfo('description'); 

          } else { 

            bloginfo('name'); wp_title(); 

          }
        ?>  
    </title>
    <!-- Meta Description Tag -->
    <meta name="Description" content="">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" />
    <!-- Material Design Lite Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/material/material.min.css" />
    <!-- Material Design Select Field Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/material/mdl-selectfield.min.css">
    <!-- Animteheading Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/animateheading/animateheading.min.css" />
    <!-- Owl Carousel Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/owl_carousel/owl.carousel.min.css" />
    <!-- Animate Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/animate/animate.min.css" />
    <!-- Magnific Popup Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/magnific_popup/magnific-popup.min.css" />
    <!-- Flex Slider Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugin/flexslider/flexslider.min.css" />
    <!-- Custom Main Stylesheet CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/dist/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css?<?php echo rand(0,999);?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<?php 
    global $options; 
    $options = get_option( 'my_framework' ); 
?> 
    <div class="wrapper">
        <!-- Start Header Section -->
        <header id="header" class="header-dark">
            <div class="layer-stretch hdr">
                <div class="tbl animated fadeInDown">
                    <div class="tbl-row">
                        <!-- Start Header Logo Section -->
                        <div class="tbl-cell hdr-logo" style=" position: absolute;left: 0;padding: 10px 15px 10px; background: #eee;">
                            <a href="<?php bloginfo('home') ?>"><img src="<?php echo $options['upload-logo']['url'];?>" alt=""></a>
                        </div><!-- End Header Logo Section -->
                        <div class="tbl-cell hdr-menu">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'  => 'primary',
                                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'ul',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'menu',
                                'menu_id'         =>  '',
                                'items_wrap'      => '<ul class="menu">%3$s<li class="mobile-menu-close"><i class="fa fa-times"></i></li></ul>',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                            <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="search-bar animated zoomIn">
                    <div class="search-content">
                        <div class="search-input">
                            <input type="text" placeholder="Enter your text ....">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </div>
                    </div>
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>
        </header><!-- End Header Section -->

        <script>
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
                //console.log(scroll);
                if (scroll >= 50) {
                    //console.log('a');
                    $(".header-dark").addClass("header-after-scroll");
                } else {
                    //console.log('a');
                    $(".header-dark").removeClass("header-after-scroll");
                }
            });
        </script>