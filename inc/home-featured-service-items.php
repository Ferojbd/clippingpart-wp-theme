<?php 
$home_top_custom_service_sec = $options['home-top-custom-service'];
if ($home_top_custom_service_sec == true) { 
?>
<!-- Start Service Section -->
	<div class="feature">
		<div class="row m-0">
			<?php
				foreach ((array) $home_top_custom_service_sec as $home_top_custom_service_value) { 
			?>
			<div class="col-sm-6 col-md-<?php echo $options['homepage-top-service-grid']; ?> col-6 feature-block">
				<div class="block">
					<i class="<?php echo $home_top_custom_service_value['home-top-custom-service-icon']; ?>"></i>

					<span>
						<a href="<?php echo $home_top_custom_service_value['home-top-custom-service-link']; ?>">
							<?php echo $home_top_custom_service_value['home-top-custom-service-title']; ?>
						</a>
					</span>

					<p class="text-white m-2">
						<?php echo $home_top_custom_service_value['home-top-custom-service-desc']; ?>
					</p>
				</div>
			</div>
		<?php } ?>
		</div>
	</div><!-- End of Service Section -->
<?php } ?>	