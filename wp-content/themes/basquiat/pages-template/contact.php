<?php
/*
Template Name:  contact
*/
?>
<?php get_header(); ?>
    <div class="container-fluid contact__intro" style="background-image: url(<?php the_field('contact_image'); ?>);">
        <div class="contact__introContent">
            <?php if( get_field('title_page') ): ?>
                <h1><?php the_field('title_page'); ?></h1>
            <?php endif; ?>
            <?php if( get_field('sub_title') ): ?>
                <p><?php the_field('sub_title'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container contact__items">
        <div class="col">
            <?php echo do_shortcode('[wpforms id="160" title="false" description="false"]'); ?>
        </div>
    </div>
    </div> <!-- /content -->

<?php get_footer(); ?>