<?php
/*
Template Name: Portfolio
*/
get_header(); ?>
<?php 
if(get_the_post_thumbnail_url()){
    $pageTitleBanner = get_the_post_thumbnail_url();
    $getBanner = 'background-image: url('.$pageTitleBanner.')';
}
// var_dump($pageTitleBanner);
?>


<div class="page-ttl" style="<?php echo $getBanner;?>">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <h1><span class="text-warning"><?php echo get_the_title();?></span></h1>
            <p><a href="<?php bloginfo('home') ?>">Home</a> → <span><?php echo get_the_title();?></span></p>
        </div>
    </div>
</div>


<div class="portfolio">
    <div class="layer-stretch">
        <div class="layer-wrapper pb-20">
            <div class="layer-ttl"><h4>Our <span class="text-primary">Portfolio</span></h4></div>
            <div class="layer-sub-ttl">Here's some of my recent work</div>
            <div class="portfolio-header text-center pt-4">
                <button class="portfolio-filter active" data-filter="all">All</button>
                <?php 
                    $PortfolioTerms = get_terms('portfolio-category', array('hide_empty' => 1, 'parent' =>0)); 
                    foreach($PortfolioTerms as $PortfolioTerm) : 
                ?>
                <button class="portfolio-filter" data-filter="<?php echo $PortfolioTerm->slug; ?>"><?php echo $PortfolioTerm->name; ?></button>
                <?php endforeach; ?>
                <!-- <button class="portfolio-filter" data-filter="mobile">Mobile App</button>
                <button class="portfolio-filter" data-filter="design">Design</button>
                <button class="portfolio-filter" data-filter="graphics">Graphics</button> -->
            </div>
            <div class="portfolio-wrapper">
                <ul class="row">
                <?php 
                    $prefix ='_rwmeta_';
                    $portfolioitems = new WP_Query(array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => '-1',
                    ));
                    if ($portfolioitems->have_posts()) : while ($portfolioitems->have_posts()) : $portfolioitems->the_post();
                ?>
                    <li class="col-sm-6 col-md-6 col-lg-4 portfolio-card portfolio-img filter all <?php $PortfolioTermslugs = get_the_terms(get_the_ID(), 'portfolio-category'); foreach($PortfolioTermslugs as $PortfolioTermslug) :?><?php echo $PortfolioTermslug->slug; ?><?php endforeach; ?>">
                        <figure class="effect-zoe">
                            <!-- <img src="<?php echo get_template_directory_uri();?>/uploads/portfolio-thumb-1.jpg" alt=""/> -->
                            <img src="<?php the_field('image_after_portfolio');?>" alt="">
                            <span class="before img-top p-1 badge badge-warning">Before</span>
                            <img src="<?php the_field('image_before_portfolio');?>" class="img-top" alt="">
                            <figcaption>
                                <p class="title"><span><?php the_title();?></span></p>
                                <p class="icon">
                                    <a href="<?php the_field('image_after_portfolio');?>" class="portfolio-gallery" title="<?php the_title();?>"><i class="icon-size-fullscreen"></i></a>
                                </p>
                                <!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro aperiam eveniet...</p> -->
                            </figcaption>
                        </figure>
                    </li>
                <?php endwhile; ?> 
                <?php endif;  wp_reset_query(); ?>
                    <!-- <li class="col-sm-6 col-md-6 col-lg-4 portfolio-img filter web">
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
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>