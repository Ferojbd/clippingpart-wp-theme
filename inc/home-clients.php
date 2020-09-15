<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
	      <div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
		    <?php
		    $home_partner_sec = $options['home-partner'];
		    foreach ((array) $home_partner_sec as $home_partner_value)  { 
			?>
	        <figure class="item client_logo">
	          <a>
	            <img src="<?php echo $home_partner_value['home-partner-logo']['url']; ?>" alt="<?php echo $home_partner_value['home-partner-name']; ?>" title="<?php echo $home_partner_value['home-partner-name']; ?>">
	          </a>
	        </figure>
            <?php }  ?> 
	      </div><!-- Owl carousel end -->
    	</div><!-- Main row end -->
	</div><!--/ Container end -->
</section>

<div class="blog">
	<div class="layer-stretch">
		<div class="layer-wrapper py-5">
			<div class="layer-ttl"><h4>Our Awesome <span class="text-primary">Partners</span></h4></div>
			<div class="row pt-4">
				<div class="owl-carousel owl-theme multi-item-slider client-owl-carousal">
					<?php
					$home_partner_sec = $options['home-partner'];
					foreach ((array) $home_partner_sec as $home_partner_value)  { 
					?>
					<div class="theme-owlslider-container">
						<img class="img-responsive" src="<?php echo $home_partner_value['home-partner-logo']['url']; ?>" alt="" title="<?php echo $home_partner_value['home-partner-name']; ?>">
					</div>
					<?php }  ?> 
				</div>
			</div>
		</div>
	</div>
</div>