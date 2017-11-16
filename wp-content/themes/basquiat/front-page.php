<?php
/*
Template Name:  home
*/

get_header() ?>
    <div id="content" >
        <section class="home-intro">

            <div class="intro-background-wrapper">
                <div class="intro__content container">
                    <?php if( get_field('title_page') ): ?>
                        <h1><?php the_field('title_page'); ?></h1>
                    <?php endif; ?>

                    <?php if( get_field('sub_title') ): ?>
                        <p><?php the_field('sub_title'); ?></p>
                    <?php endif; ?>
                    <p>SCROLLER VERS LE BAS</p>
                </div>
                <div class="thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
        </section>
        <section class="citation" style="color:white;">
            <?php if( get_field('introduction') ): ?>
                <p class="citation__content"><?php the_field('introduction'); ?></p>
            <?php endif; ?>
        </section>

        <section class="home-profile">

            <div class="profil-content-wrapper ">

                <div class="home-profile-text-wrapper ">
                    <div class="">

                        <?php if( get_field('title_biography') ): ?>
                            <h1><?php the_field('title_biography'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_biography') ): ?>
                            <p><?php the_field('content_biography'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="thumbnail">
                        <?php

                        $image = get_field('biography_image');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </section>
        <div class="container">


        <!-- PERCEVERANT SECTION-->
            <section class="home-perceverant">

                <div class="perceverant-content-wrapper">

                    <div class="thumbnail">
                        <?php

                        $image = get_field('perceverant_image');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="home-perceverant-text-wrapper">
                        <div>

                            <?php if( get_field('title_perceverant') ): ?>
                                <h1><?php the_field('title_perceverant'); ?></h1>
                            <?php endif; ?>

                            <?php if( get_field('content_perceverant') ): ?>
                                <p><?php the_field('content_perceverant'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>


            <!-- REVOLUTIONNARY SECTION-->
            <section class="home-biography">
                <div class="bio-content-wrapper">
                    <div class="thumbnail">
                        <?php

                        $image = get_field('revolutionnaire_image');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                    </div>

                    <div class="home-bio-text-wrapper">
                        <div>

                            <?php if( get_field('title_revolutionnaire') ): ?>
                                <h1><?php the_field('title_revolutionnaire'); ?></h1>
                            <?php endif; ?>

                            <?php if( get_field('content_revolutionnaire') ): ?>
                                <p><?php the_field('content_revolutionnaire'); ?></p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </section>
        </div>
        <section class="history">
                <div class="history__direction container">
                    <div class="history__directionText"> Lire l’histoire de Basquiat</div>
                    <div class="history__directionArrow">
                        <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                    </div>
                </div>

                <div class="history__slider">
                    <div class="slider__description container">
                        <h3 class="slider__title">Galerie photo</h3>
                        <p class="slider__paragraph">
                            Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <a href="" class="see-more">En savoir plus</a>

                        <button type="slider__button slider__buttonPrevious">
                            <img src="" alt="">
                        </button>
                        <button type="slider__button slider__buttonNext">
                            <img src="" alt="">
                        </button>
                    </div>

                    <div class="slider__elements">
                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie1.png" alt="">
                        </div>

                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie1.png" alt="">
                        </div>

                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie1.png" alt="">
                        </div>


                    </div

                </div>

            </section>
        <!-- /container-->
    </div> <!-- /content -->
<?php get_footer(); ?>


