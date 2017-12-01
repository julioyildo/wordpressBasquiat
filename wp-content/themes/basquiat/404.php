<?php get_header(); //appel du template header.php  ?>
<div class="row wrapper_404">
    
    <div class="col-md-7 infos_404">
        <h1 class="title_404">Error 404</h1>
        <p class="text_404">You're going in the wrong direction !</p>
        <hr class="directionSeparator__404">
        <a href="<?php echo get_option('home'); ?>">
            <img src="<?php echo IMAGES_URL?>/house-outline.svg">
            <p class="home_404">Go Back to home</p>
        </a>
<!--<p class="home_404">Back to the homepage</p>-->
    </div>
    
    <div class="col-md-5 card_404">
        <img src="<?php echo IMAGES_URL?>/basquiat_404.jpg">
    </div>
    
</div>
<?php get_footer(); //appel du template footer.php ?>