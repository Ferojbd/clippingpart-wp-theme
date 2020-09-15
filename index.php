<?php get_header();?>
        
            <?php  
            // Start Slider Section/
                require_once 'inc/home-slider.php';
            // Start Featured Service Section
                require_once 'inc/home-featured-service-items.php';
            // Start About Section
                require_once 'inc/home-company-profile-tab.php';
            // Start Portfolio Section
                require_once 'inc/home-service-items.php';
            // Start Portfolio Section
                require_once 'inc/home-portfolio-items.php';
            // Start Portfolio Section
                require_once 'inc/home-special-content.php';
            // Start Portfolio Section
                require_once 'inc/home-work-process.php';
            // Start Client Section
                require_once 'inc/home-clients.php';
            ?>
        <?php /*
        <!-- Start Portfolio Section -->
        <!-- <div class="portfolio">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Our <span class="text-primary">Portfolio</span></h4></div>
                    <div class="layer-sub-ttl">Here's some of my recent work</div>
                    <div class="portfolio-header text-center pt-4">
                        <button class="portfolio-filter active" data-filter="all">All</button>
                        <button class="portfolio-filter" data-filter="web">Web App</button>
                        <button class="portfolio-filter" data-filter="mobile">Mobile App</button>
                        <button class="portfolio-filter" data-filter="design">Design</button>
                        <button class="portfolio-filter" data-filter="graphics">Graphics</button>
                    </div>
                    <div class="portfolio-wrapper">
                        <ul class="row">
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter all mobile web design graphics">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-1.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a href="<?php echo get_template_directory_uri();?>/uploads/portfolio-1.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter web">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-2.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a  href="<?php echo get_template_directory_uri();?>/uploads/portfolio-2.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter mobile">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-3.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a  href="<?php echo get_template_directory_uri();?>/uploads/portfolio-3.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter mobile">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-4.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a  href="<?php echo get_template_directory_uri();?>/uploads/portfolio-4.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter web">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-5.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a  href="<?php echo get_template_directory_uri();?>/uploads/portfolio-5.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                            <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter design">
                                <figure class="effect-zoe">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-6.jpg" alt=""/>
                                    <figcaption>
                                        <p class="title">John <span>Doe</span></p>
                                        <p class="icon">
                                            <a href="#"><i class="icon-heart"></i></a>
                                            <a href="#"><i class="icon-basket-loaded"></i></a>
                                            <a  href="<?php echo get_template_directory_uri();?>/uploads/portfolio-6.jpg" class="portfolio-gallery" title="John Doe"><i class="icon-size-fullscreen"></i></a>
                                        </p>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p>
                                    </figcaption>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Portfolio Section -->
        <!-- Start Team Section -->
        <div class="team">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-20">
                    <div class="layer-ttl"><h4>Our <span class="text-primary">Creative</span> Team</h4></div>
                    <div class="layer-sub-ttl">There are some things money can't buy. For everything else, there's MasterCard.</div>
                    <div class="row pt-4">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="team-block-1">
                                <div class="team-img">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/team-1.jpg" alt="">
                                </div>
                                <div class="team-details">
                                    <h3>John Snow</h3>
                                    <p>Co-Founder</p>
                                </div>
                                <div class="team-tag">
                                    <span class="badge badge-primary badge-sm badge-pill">PHP</span>
                                    <span class="badge badge-success badge-sm badge-pill">HTML5</span>
                                    <span class="badge badge-warning badge-sm badge-pill">CSS3</span>
                                    <span class="badge badge-dark badge-sm badge-pill">JS</span>
                                    <span class="badge badge-light badge-sm badge-pill">jQuery</span>
                                </div>
                                <div class="team-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quos.</p>
                                </div>
                                <div class="team-link">
                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="team-block-1">
                                <div class="team-img">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/team-5.jpg" alt="">
                                </div>
                                <div class="team-details">
                                    <h3>Melissa Bates</h3>
                                    <p>Co-Founder</p>
                                </div>
                                <div class="team-tag">
                                    <span class="badge badge-warning badge-sm badge-pill">Adobe Photoshop</span>
                                    <span class="badge badge-danger badge-sm badge-pill">Adobe Illustrator</span>
                                </div>
                                <div class="team-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quos.</p>
                                </div>
                                <div class="team-link">
                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="team-block-1">
                                <div class="team-img">
                                    <img src="<?php echo get_template_directory_uri();?>/uploads/team-2.jpg" alt="">
                                </div>
                                <div class="team-details">
                                    <h3>Sheldon Logo</h3>
                                    <p>Lead Desinger</p>
                                </div>
                                <div class="team-tag">
                                    <span class="badge badge-success badge-sm badge-pill">Photoshop</span>
                                    <span class="badge badge-dark badge-sm badge-pill">illustrator</span>
                                    <span class="badge badge-primary badge-sm badge-pill">Sketch</span>
                                </div>
                                <div class="team-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quos.</p>
                                </div>
                                <div class="team-link">
                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div><!-- End of Team Section -->
        <!-- Start Action Section -->
        <div class="action">
            <div class="layer-stretch">
                <div class="layer-wrapper text-center">
                    <div class="layer-ttl"><h4>We design <span class="text-primary">delightful</span> digital experiences</h4></div>
                    <div class="action-content">Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design, develop and deploy. Tell Us Your Story</div>
                    <a href="#" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-lg mt-3">Tell Us Your Story</a>
                </div>
            </div>
        </div><!-- End Action Section -->
        <!-- Start Blog Section -->
        <div class="blog">
            <div class="layer-stretch">
                <div class="layer-wrapper pb-3">
                    <div class="layer-ttl"><h4>Our <span class="text-primary">Blog</span></h4></div>
                    <div class="layer-sub-ttl">Would you like to see more?</div>
                    <div class="row pt-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="<?php echo get_template_directory_uri();?>/uploads/blog-1.jpg" alt="">
                                <div>
                                    <h4><a href="#">iPhone X in Market</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="<?php echo get_template_directory_uri();?>/uploads/blog-2.jpg" alt="">
                                <div>
                                    <h4><a href="#">Creative Zone</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-card">
                                <img src="<?php echo get_template_directory_uri();?>/uploads/blog-3.jpg" alt="">
                                <div>
                                    <h4><a href="#">Getting Bored. Try This.</a></h4>
                                    <div class="blog-meta">
                                        <p><i class="icon-user"></i><span>Admin</span></p>
                                        <p><i class="icon-clock"></i><span>24 Jul</span></p>
                                        <p><i class="icon-bubble"></i><span>29</span></p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga officia, sint omnis corporis adipisci reprehenderit...</p>
                                    <a href="#"><span>Read More</span><i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Section -->
        */ ?>
       
        
       
 <?php get_footer(); ?>      
       