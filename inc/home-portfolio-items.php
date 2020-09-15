<div class="portfolio">
    <div class="layer-stretch">
        <div class="layer-wrapper pb-20">
            <div class="layer-ttl"><h4>Our <span class="text-primary">Portfolio</span></h4></div>
            <div class="layer-sub-ttl">Here's some of my recent work</div>
            <!-- Portfolio Items -->
            <div id="gallery-page">
                <div class="gallery-container">
                    <ul class="portfolio-image">
                        <?php  
                        $portfolioItems = new WP_Query([
                            'post_type'      => 'portfolio',
                            'post_status'    => 'publish',
                            'posts_per_page' => '8', 
                            'order'        =>  'DESC',
                        ]);
                        while ($portfolioItems->have_posts()) : $portfolioItems->the_post()?>
                        <li class="gallery-block portfolio-card">
                            <a href="<?php the_field('image_after_portfolio');?>">
                                <img src="<?php echo apply_filters( 'jetpack_photon_url', get_field('image_after_portfolio'));?>" alt="">
                                <span class="before img-top p-1 badge badge-warning">Before</span>
                                <img src="<?php echo apply_filters( 'jetpack_photon_url', get_field('image_before_portfolio'));?>" class="img-top" alt="">
                                <div class="gallery-layer">
                                    <div class="x-gallery-layer-dark">
                                        <p><i class="fa fa-search-plus"></i></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php  endwhile;?>
                        
                    </ul>
                    <a href="<?php bloginfo('home');?>/portfolio" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-md mt-4 mb-3">View More</a>
                </div>
            </div><!-- End Gallery Section -->
            <!-- End Portfolio Items -->
        </div>
    </div>
</div>