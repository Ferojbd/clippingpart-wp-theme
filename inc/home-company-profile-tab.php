 <!-- Start About Section -->
<div class="about">
	<div class="layer-stretch">
		<div class="layer-wrapper">
			<div class="layer-ttl"><h4><span class="text-primary">About</span> Us</h4></div>
			<div class="layer-sub-ttl">We design delightful digital experiences. You will love it.</div>
			<div class="row pt-4">
				<div class="col-md-5">
					<!-- Accordion -->
					<div class="panel panel-default">
                        <div class="panel-bod p-0">
                            <div class="theme-accordion-container">
								<?php
									$accorsioncount = 1;
									$home_accordion_group_sec = $options['home-accordion-col'];
									foreach ((array) $home_accordion_group_sec as $home_accordion_group_value) { 
								?>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-success">
											<i class="<?php echo $home_accordion_group_value['accordion-menu-icon']; ?>"></i>
											<?php echo $home_accordion_group_value['accordion-menu-title']; ?>
										</h4>
                                        <div class="theme-accordion-control"></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-1">
                                            <div class="col-12">
                                                    <?php echo wpautop(str_replace("&nbsp;","<br/>",$home_accordion_group_value['accordion-menu-desc']));?>
                                            </div>
                                        </div>
                                    </div>
								</div><!-- End -->
								<?php $accorsioncount++;?>
                   				<?php } ?>
                                
                            </div>
                        </div>
                    </div><!-- End Accordion -->
				</div>
				<div class="col-md-7">
					<!-- Tab -->
					<div class="panel panel-default">
						<div class="panel-body p-2">
							<ul class="nav nav-tabs nav-tabs-line nav-tabs-line-primary">
								<?php
									$tabcount = 1;
									$home_tab_group_sec = $options['home-tab-col'];
									foreach ((array) $home_tab_group_sec as $home_tab_group_value) { 
								?>
									<li class="nav-item">
										<a class="nav-link <?php if ($tabcount == 1) {echo 'active';} ?>" href="#tab<?php echo str_replace(" ","",$home_tab_group_value['tab-menu-title']).$tabcount;?>" data-toggle="tab">
											<i class="<?php echo $home_tab_group_value['tab-menu-icon']; ?>"></i>
											<?php echo $home_tab_group_value['tab-menu-title']; ?>
										</a>
									</li>
								<?php $tabcount++;?>
                   				<?php } ?> 
							</ul>
							<div class="tab-content mt-2">
								<?php
									$tabcount = 1;
									$home_tab_group_sec = $options['home-tab-col'];
									foreach ((array) $home_tab_group_sec as $home_tab_group_value) { 
								?>
									<div role="tabpanel" class="tab-pane <?php if ($tabcount == 1) {echo 'active';} ?>" id="tab<?php echo str_replace(" ","",$home_tab_group_value['tab-menu-title']).$tabcount;?>">
										<p class="font-14">
											<?php echo wpautop(str_replace("&nbsp;","<br/>",$home_tab_group_value['tab-menu-desc']));?>
										</p>
									</div>
								<?php $tabcount++;?>
                 				<?php } ?>	 
							</div>
						</div>
					</div><!-- End Tab -->
				</div>
			</div>
		</div>
	</div>
</div><!-- End About Section -->




<!-- Hover Image 
<div class="portfolio-card">
    	<img src="https://www.tutorialrepublic.com//examples/images/card-back.jpg" alt="Card Back">
        <img src="https://www.tutorialrepublic.com//examples/images/card-front.jpg" class="img-top" alt="Card Front">
</div> -->

