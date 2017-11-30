<?php get_header(); ?>
  <section class="container-fluid gallery">
    <div class="row">
      <div class="gallery__cover">
        <?php the_post_thumbnail( 'gallery_header_thumbnail' ); ?>
        <div class="gallery__coverFilter">
        </div>
        <h1 class="gallery__coverTitle">Galerie <br> <?php the_title(); ?></h1>
      </div>
    </div>
    <div class="row">
      <div class="galleries__menu">
        <?php
          $args=array(
            'theme_location' => 'galleries', // nom du slug
            'menu' => 'galleries', // nom à donner cette occurence du menu
            'menu_class' => 'galleries__menu', // class à attribuer au menu
            'menu_id' => 'galleries__menu' // id à attribuer au menu
            // voir les autres arguments possibles sur le codex
          );
          wp_nav_menu($args);
        ?>
      </div>
    </div>
    <div class="gallery__content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="gallery__content">
                <?php the_content(); ?>
              </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>