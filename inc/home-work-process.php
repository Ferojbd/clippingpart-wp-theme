<div class="funfacts">
    <div class="layer-stretch text-center">
        <div class="layer-wrapper">
            <div class="row align-items-center pt-4">
                <div class="col-md-7">
                        <div class="layer-ttl"><h4>Our <span class="text-primary">Work</span> Process</h4></div>
                    <?php 
                    $home_work_process_sec = $options['home-work-processs'];
                    if ($home_work_process_sec == true) { 
                    ?>
                    <div class="row">
                        <?php
                            foreach ((array) $home_work_process_sec as $home_work_process_sec_value) { 
                        ?>
                        <div class="counter-block col-md-4">
                            <?php if(!empty($home_work_process_sec_value['home-work-process-logo']['url'])){ ?>
                            <img src="<?php echo $home_work_process_sec_value['home-work-process-logo']['url']; ?>" alt="" style="border: 5px solid #f1f1f1; border-radius: 50%; width: 80px; height: 80px; line-height: 70px;">
                            <?php } ?>

                            <?php if(empty($home_work_process_sec_value['home-work-process-logo']['url'])){ ?>
                                <i class="text-primary <?php echo $home_work_process_sec_value['home-work-process-icon']; ?>"></i>
                            <?php } ?>

                            <span style="font-weight: 600; font-size: 17px; display: block;">
                                <?php echo $home_work_process_sec_value['home-work-process-title'] ; ?>
                            </span>

                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>	
                </div>
                <div class="col-md-5">
                    <div class="testimonial">
                        <div class="testimonial-container owl-carousel owl-theme theme-owl-dot">
                            <?php 
                            $testimonialitems = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => '-1',
                            ));
                            while ($testimonialitems->have_posts()) : $testimonialitems->the_post();
                            ?>
                            <div class="testimonial-block">
                                <div class="layer-ttl"><h4 class="text-white">Client's <span class="text-warning">feedback</span></h4></div>
                                <div class="testimonial-detail">
                                    <i class="fa fa-quote-right"></i>
                                    <p>"<?php echo get_the_content();?>"</p>
                                </div>
                                <div class="testimonial-img">
                                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                                    <span><?php the_title();?></span>
                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>