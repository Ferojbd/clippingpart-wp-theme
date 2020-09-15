<?php 
/* 
   Template Name: Pricing
*/
get_header(); ?>
<?php while(have_posts()) : the_post(); ?>

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

			<div class="row">
				<?php  
				$portfolioItems = new WP_Query([
	                'post_type'      => 'pricing',
	                'post_status'    => 'publish',
	                'posts_per_page' => '-1', 
	                'order'        =>  'ASC',
				]);
				$count = 0;
				while ($portfolioItems->have_posts()) : $portfolioItems->the_post()?>
				<!-- plan start -->
				<div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				    <div class="plan text-center">

				        <span class="plan-name" style="background: <?php the_field('block_color_primary'); ?>; color: #fff;">
				        	<?php echo get_the_title(); ?> 
				        	<small><?php the_field('price_message');?></small>
				        </span>

				        <ul class="list-unstyled">
                          <?php while ( have_rows('price_of_items') ) : the_row(); ?>
				            <li style="background: <?php the_field('block_color_secondary');?>">
				               <a href="<?php the_permalink();?>" style="display: inline-block; color: <?php the_field('item_font_color');?> "> <?php the_sub_field('items_name') ?> </a>
				               <strong class="pull-right text-center" style="background: <?php the_field('block_color_primary');?>; color: #fff;"> <?php the_sub_field('items_price'); ?> </strong>
				           </li>
                           <?php endwhile; ?>
				        </ul>
                        <div style="background: <?php the_field('block_color_primary');?>; padding: 20px 0px;">
				           <a href="<?php the_field('price_item_link');?>" class="btn btn-success" style="border-radius: 50px; text-transform: uppercase; margin: 0px; border-color: <?php the_field('block_color_secondary');?>;">View Details</a>
				        </div>   

				    </div>
				</div><!-- plan end -->

			   <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } ?>
             <?php $i++; endwhile; wp_reset_query(); ?>

			</div>
			
		</div>
	</div>
</div>


<?php endwhile; ?>


<style type="text/css">

 .plan {
	border: none;
}
 
 .plan ul li {
 	padding: 0px 0px;
 	margin: 10px 0px;
 	font-size: 18px;
 }

 .plan ul li  strong {
 	padding: 20px 5px;
 	min-width: 60px;
 }	

  .plan ul li a {
 	padding: 20px 5px;
 	font-weight: bold;
 }	
	
 .plan ul li:after {
    content: "";
    display: table;
    clear: both;
}




</style>
<?php get_footer(); ?>	