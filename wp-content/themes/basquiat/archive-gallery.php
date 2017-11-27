<?php get_header(); ?>
  <section class="container-fluid galleries">
    <div class="row galleries__list">
      <div class="col-lg-12">
        <h1 class="galleries__listTitle">Galerie</h1>
      </div>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="col-lg-4">
            <article class="galleries__listItem">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
              </a>
              <h2 class="galleries__listItem__title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
              </h2>
              <div class="galleries__listItem__gradient">
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
<?php get_footer(); ?>