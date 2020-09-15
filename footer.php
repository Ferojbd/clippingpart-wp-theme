<?php 
    global $options; 
    $options = get_option( 'my_framework' ); 
?>
<!-- Start Footer Section -->
        <footer id="footer" class="footer-03">
            <div class="layer-stretch">
                <!-- Start main Footer Section -->
                <div class="row pt-2 pb-3">
                     <?php dynamic_sidebar('footer_widget');?>
                </div>
                <div class="pb-3 mx-auto text-center">
                    <ul class="social-list social-list-colored">
                        <li>
                            <a href="<?php echo $options['fb-link'];?>" id="sample-facebook-2"><i class="fab fa-facebook"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-2">Facebook</span>
                        </li>
                        <li>
                            <a href="<?php echo $options['twitter-link'];?>" id="sample-twitter-2"><i class="fab fa-twitter"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-twitter-2">Twitter</span>
                        </li>
                        <li>
                            <a href="<?php echo $options['insagram-link'];?>" id="sample-instagram-2"><i class="fab fa-instagram"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-2">Instagram
                            </span>
                        </li>
                         <li>
                            <a href="<?php echo $options['pinterest-link'];?>" id="sample-pinterest-2"><i class="fab fa-pinterest"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-pinterest-2">Pinterest
                            </span>
                        </li>
                        <li>
                            <a href="<?php echo $options['youtube-link'];?>" id="sample-youtube-2"><i class="fab fa-youtube"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-2">Youtube</span>
                        </li>
                        <li>
                            <a href="<?php echo $options['linkedin-link'];?>" id="sample-linkedin-2"><i class="fab fa-linkedin"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-linkedin-2">Linkedin</span>
                        </li>
                        <li>
                            <a href="<?php echo $options['skype-link'];?>" id="sample-skype-2"><i class="fab fa-skype"></i></a>
                            <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-flickr-2">Skype</span>
                        </li>
                    </ul>
                </div>
            </div><!-- End main Footer Section -->
            <!-- Start Copyright Section -->
            <div id="copyright">
                <div class="layer-stretch">
                    <div class="paragraph-medium"><?php echo date("Y"); ?> © ALL RIGHTS RESERVED.</div>
                </div>
            </div><!-- End of Copyright Section -->
        </footer><!-- End of Footer Section -->
    </div>
    
    
    <!-- Sticky Social -->
<style>
.icon-bar {
    position: fixed;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 999;
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 5px 10px;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;
}

.icon-bar a:hover {
    background-color: #000;
}

.facebook {
    background: #3B5998;
    color: white;
}

.twitter {
    background: #55ACEE;
    color: white;
}

.pinterest {
    background: #dd4b39;
    color: white;
}

.linkedin {
    background: #007bb5;
    color: white;
}

.youtube {
    background: #bb0000;
    color: white;
}
.skype {
    background: #00AFF0;
    color: white;
}
.instagram {
    background: #C13584;
    color: white;
}
</style>
    
    
    <div class="icon-bar">
  <a href="<?php echo $options['fb-link'];?>" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="<?php echo $options['twitter-link'];?>" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="<?php echo $options['pinterest-link'];?>" class="pinterest"><i class="fa fa-pinterest"></i></a> 
  <a href="<?php echo $options['linkedin-link'];?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="<?php echo $options['youtube-link'];?>" class="youtube"><i class="fa fa-youtube"></i></a> 
  <a href="<?php echo $options['insagram-link'];?>" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="<?php echo $options['skype-link'];?>" class="skype"><i class="fa fa-skype"></i></a> 
</div>
    <!-- End Sticky -->
    
    
    <!-- **********Included Scripts*********** -->

    <!-- Jquery Library 2.1 JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/jquery/jquery-2.1.4.min.js"></script>
    <!-- Popper JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/popper/popper.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/bootstrap/bootstrap.min.js"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/modernizr/modernizr.js"></script>
    <!-- Animaateheading JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/animateheading/animateheading.js"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/material/material.min.js"></script>
    <!-- Material Select Field Script -->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/material/mdl-selectfield.min.js"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/flexslider/jquery.flexslider.min.js"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/owl_carousel/owl.carousel.min.js"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/magnific_popup/jquery.magnific-popup.min.js"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/waypoints/jquery.waypoints.min.js"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/counterup/jquery.counterup.js"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/masonry_pkgd/masonry.pkgd.min.js"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/assets/plugin/smoothscroll/smoothscroll.min.js"></script>
    <!--Custom JavaScript-->
    <script src="<?php echo get_template_directory_uri();?>/dist/js/custom.js"></script>
    <?php wp_footer();?>
    
</body>
</html>