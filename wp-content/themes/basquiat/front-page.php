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
                <div class="thumbnail home-intro__bkg">
                    <?php the_post_thumbnail(); ?>
                </div>
        </section>
        <section class="citation" style="color:white;">
            <p class="citation__decoration">[...]</p>
            <?php if( get_field('introduction') ): ?>

                <p class="citation__content"><?php the_field('introduction'); ?></p>
            <?php endif; ?>
        </section>

        <section class="home-profile">

            <div class="profil-content-wrapper ">

                <div class="home-profile-text-wrapper ">
                    <div class="home-profile-text-wrapper__text">

                        <?php if( get_field('title_biography') ): ?>
                            <h1><?php the_field('title_biography'); ?></h1>
                        <?php endif; ?>

                        <?php if( get_field('content_biography') ): ?>
                            <p><?php the_field('content_biography'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="thumbnail briography-image">
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

                    <div class="perceverant-content-img thumbnail">
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

            <div class="home__decorationPaint"></div>



            <!-- REVOLUTIONNARY SECTION-->
            <section class="home-revolution">
                <div class="revolution-content-wrapper">
                    <div class="home-revolution-text-wrapper">
                        <div>
                            <?php if( get_field('title_revolutionnaire') ): ?>
                                <h1><?php the_field('title_revolutionnaire'); ?></h1>
                            <?php endif; ?>

                            <?php if( get_field('content_revolutionnaire') ): ?>
                                <p><?php the_field('content_revolutionnaire'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="thumbnail">
                        <?php

                        $image = get_field('revolutionnaire_image');

                        if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                        <?php endif; ?>

                    </div>
                </div>
            </section>
        </div>

        <!-- HISTORY-->
        <section class="history">
            <div class="history__direction container">
                <div class="history__directionText"> Lire l’histoire de Basquiat</div>
                <div class="history__directionArrow">
                    <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                </div>
                <hr class="history__directionSeparator">
            </div>
            <div class="history__bkgImage">
                <img src="<?php echo IMAGES_URL?>/brush2.png" alt="brush decoration">
            </div>


            <?php if( get_field('title_galerie') ): ?>
                <div class="history__titleBkg">
                    <?php the_field('title_galerie'); ?>
                </div>
            <?php endif; ?>


            <div class="history__slider">
                <div class="slider__description container">
                    <?php if( get_field('title_galerie') ): ?>
                        <h3 class="slider__title"><?php the_field('title_galerie'); ?></h3>
                    <?php endif; ?>

                    <?php if( get_field('description_gallerie') ): ?>
                        <p class="slider__paragraph"><?php the_field('description_gallerie'); ?></p>
                    <?php endif; ?>
                </div>

                <div class="slider__elements">
                        <div class="slider__elementsBkgImage">
                            <img src="<?php echo IMAGES_URL?>/paint1.png" alt="paint decoration">
                        </div>
                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie1.png" alt="artwork">
                        </div>

                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie2.png" alt="artwork">
                        </div>

                        <div class="slider__elSlide">
                            <div class="slide__filter"></div>
                            <img src="<?php echo IMAGES_URL?>/galerie3.png" alt="artwork">
                        </div>
                </div>

            </div>

            </section>


        <!-- ACTUALITY-->
        <section class="actuality">
            <div class="actuality__direction container">

                <div class="actuality__directionText"> Voir la galerie</div>
                <div class="actuality__directionArrow">
                    <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                </div>
                <hr class="actuality__directionSeparator">
            </div>
            <div class="actuality__bkgImage">
                <img src="<?php echo IMAGES_URL?>/brush2.png" alt="brush decoration">
            </div>
            <?php if( get_field('title_actuality') ): ?>
            <div class="actuality__titleBkg">
                <?php the_field('title_actuality'); ?>
            </div>
            <?php endif; ?>
            <div class="container">
                <?php if( get_field('title_actuality') ): ?>
                    <h3 class="actuality__title slider__title"><?php the_field('title_actuality'); ?></h3>
                <?php endif; ?>
                <div class="actulity__articlesWrapper row">

                    <div class="actuality__articles card col-4 " style="width: 20rem;">
                        <img class="card-img-top" src="<?php echo IMAGES_URL?>/blog1.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-date">10 JUIN 2017</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            <a href="#" class="card-btn btn ">
                                <p>Lire l'article</p>
                                <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                            </a>
                        </div>
                    </div> <div class="actuality__articles card col-4 " style="width: 20rem;">
                        <img class="card-img-top" src="<?php echo IMAGES_URL?>/blog1.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-date">10 JUIN 2017</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            <a href="#" class="card-btn btn ">
                                <p>Lire l'article</p>
                                <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                            </a>
                        </div>
                    </div> <div class="actuality__articles card col-4 " style="width: 20rem;">
                        <img class="card-img-top" src="<?php echo IMAGES_URL?>/blog1.png" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-date">10 JUIN 2017</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            <a href="#" class="card-btn btn ">
                                <p>Lire l'article</p>
                                <img src="<?php echo IMAGES_URL?>/arrow-right.svg" >
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section >
    </div>

    <div class="container-fluid">
        <section class="home__footerImg" >
            <img src="<?php echo IMAGES_URL?>/home__footerImg.png" alt="">

        </section>
    </div>
        <!-- /container-->
    </div> <!-- /content -->
<?php get_footer(); ?>


