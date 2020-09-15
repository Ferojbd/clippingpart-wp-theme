<!-- Start -->
<div class="blog">
	<div class="layer-stretch">
		<div class="layer-wrapper pb-3">
			<div class="layer-ttl">
				<h4><span class="text-primary">Trending</span> Service</h4>
			</div>
			<div class="layer-sub-ttl">Our services at a glance</div>
			<div class="row pt-4">
				<?php  
				$serviceItems = new WP_Query([
					'post_type'      => 'service',
					'post_status'    => 'publish',
					'posts_per_page' => '-1', 
					'order'        =>  'DESC',
				]);
				while ($serviceItems->have_posts()) : $serviceItems->the_post()?>
				<div class="col-md-6 col-lg-4 mx-auto">
					<div class="blog-card portfolio-card">
						<?php if(get_field('image_after_service') || get_field('image_before_service')){ ?>
							<!--<img src="<?php the_field('image_after_service');?>" alt="">-->
							<img src="<?php echo apply_filters( 'jetpack_photon_url', get_field('image_after_service')['url'] ); ?>" alt="" >
							<span class="before img-top p-1 badge badge-warning">Before</span>
							<!--<img src="<?php the_field('image_before_service');?>" class="img-top" alt="">-->
							<img class="img-top" src="<?php echo apply_filters( 'jetpack_photon_url', get_field('image_before_service')['url'] ); ?>" alt="" >
						<?php } ?>
						<div>
							<h4 class="text-center"><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h4>
						</div>
					</div>
				</div>
				<?php  endwhile;?>
			</div>
		</div>
	</div>
</div><!-- End Blog Section -->