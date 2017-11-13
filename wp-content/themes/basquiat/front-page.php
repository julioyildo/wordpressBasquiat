<?php
/*
Template Name:  Home
*/
?>
<?php get_header(); ?>


    <div id="content">
        <h1>Contenu Principal</h1>
        <?php
        // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
                <h1><?php the_title(); ?></h1>
                <h2>Posté le <?php the_time('F jS, Y') ?></h2>
                <p><?php the_content(); ?></p>
                <div class="intro-background-wrapper">


                </div>
                <?php
            }
        }
        else {
            ?>
            Nous n'avons pas trouvé d'article répondant à votre recherche
            <?php
        }
        ?>
    </div> <!-- /content -->


<?php if( get_field('introduction') ): ?>
    <h2><?php the_field('introduction'); ?></h2>
<?php endif; ?>

<?php if( get_field('title_biography') ): ?>
    <h4><?php the_field('title_biography'); ?></h4>
<?php endif; ?>

<?php if( get_field('content_biography') ): ?>
    <p><?php the_field('content_biography'); ?></p>
<?php endif; ?>


<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>


<?php get_footer(); ?>