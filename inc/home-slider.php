<!-- Start Slider Section -->
<div id="slider" class="slider-dark sslider-gradient">
	<div class="flexslider slider-wrapper">
		<ul class="slides">
			<?php 
				$slideritems = new WP_Query(array(
					'post_type' => 'slider',
					'posts_per_page' => '-1',
				));
			if ($slideritems->have_posts()) : while ($slideritems->have_posts()) : $slideritems->the_post(); ?>
			<li>
			    <?php if(get_field('switch_image_or_video') != 'video') { ?>
				<div class="slider-backgroung-image" style="background-image: url(<?php echo apply_filters( 'jetpack_photon_url', get_the_post_thumbnail_url());?>)">
					<div class="layer-stretch">
						<div class="slider-info">
							<h1><?php echo get_the_title(); ?></h1>
							<p class="animated fadeInDown">
								<?php the_field('slider_short_content'); ?>
							</p>
							<?php if(get_field('button_text') == true) { ;?>
								<div class="slider-button">
									<a href="<?php the_field('button_link'); ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill"><?php the_field('button_text'); ?></a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php } else { ?>
			    <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
                    <video class="w-100 slider-video" playsinline autoplay loop muted>
                        <source src="<?php the_field('slider_video_link'); ?>" type="video/mp4">
                    </video>
					<div class="slider-info">
						<h1><?php echo get_the_title(); ?></h1>
						<p class="animated fadeInDown">
							<?php the_field('slider_short_content'); ?>
						</p>
						<?php if(get_field('button_text') == true) { ;?>
							<div class="slider-button">
								<a href="<?php the_field('button_link'); ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect button button-primary button-pill"><?php the_field('button_text'); ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="slider-info" style="background-image: url(<?php echo get_template_directory_uri();?>/images//gridtile.png); height: 100%; top:0; z-index: 100;"></div>
                </div>
				<?php } ?>
			</li> 
			<?php endwhile; else : ?>
				
			<?php endif;  wp_reset_query(); ?> 
		</ul>
	</div>
</div><!-- End Slider Section -->
