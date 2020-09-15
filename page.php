<?php get_header();?>

<?php 
if(get_the_post_thumbnail_url()){
    $pageTitleBanner = get_the_post_thumbnail_url();
    $getBanner = 'background-image: url('.$pageTitleBanner.')';
}
// var_dump($pageTitleBanner);
?>
<?php while(have_posts()) : the_post() ;?>
<div class="page-ttl" style="<?php echo $getBanner;?>">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <h1><span class="text-warning"><?php echo get_the_title();?></span></h1>
            <p><a href="<?php bloginfo('home') ?>">Home</a> → <span><?php echo get_the_title();?></span></p>
        </div>
    </div>
</div>



<!-- Start About Section -->
<div class="layer-stretch">
    <div class="layer-wrapper pb-4">
        <div class="pt-4">
            <?php the_content();?>
        </div>
    </div>
</div><!-- End About Section -->

<?php endwhile;?> 

<?php get_footer();?>