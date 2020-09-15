<?php if ($options ['home_special_content'] == true) { ?>
<div class="bg-white">
	<div class="layer-stretch">
		<div class="layer-wrapper text-center">
			<?php echo $options ['home_special_content']; ?>
			<a href="<?php bloginfo('home') ?>/free-trial" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-lg mt-3">Free Trial</a>
		</div>
	</div>
</div>
<?php } ?>