<?php get_header(); //appel du template header.php  ?>

<div id="content">

    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
        the_post();
        ?>
        <!--IMAGE INTRO-->
        <div class="container-fluid">
             <div class="img-responsive thumbnail">
                <?php
                if(has_post_thumbnail())
                {
                    the_post_thumbnail();
                }
                ?>
            </div>
        </div> <!-- /container fluid -->
    
        <!--ARTICLE-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <p class="article-intro">
                     « Believe it or not, I can actually draw », affirmait l'artiste américain Jean-Michel Basquiat à qui la Barbican Art Gallery de Londres consacre actuellement l'exposition « Boom for Real », présentée jusqu'au 28 janvier 2018.
                    </p>
                </div>
            </div>
    
            <div class="row">
                <div class="center-block">
                    <img class="img-responsive" src="<?php echo IMAGES_URL?>/article_img_a.jpg" >
                    <p class="legend">
                     Vue de l’exposition « Basquiat: Boom For Real » à la Barbican Art Gallery ©<br> Tristan Fewings – Getty Images
                    </p>
                </div>
            </div>
      
            <div class="row first-paragraph">
                <div class="col-md-12">
                    <p class="article-text">
                     L’exposition « Boom for Real » de la Barbican Art Gallery de Londres, est une rétrospective articulée autour d’une centaine d’œuvres de l’artiste Jean-Michel Basquiat – dessins, collages, peintures, carnets -, mais aussi de nombreuses photographies, films et mélodies qui commencent par ramener le visiteur dans le New York de la fin des années 70. 
                    </p>
                </div>
            </div>
        
            <div class="row second-paragraph">
                <div class="col-md-6">
                    <img class="img-responsive" src="<?php echo IMAGES_URL?>/article_img_b.jpg" >
                </div>
        
                <div class="col-md-6">
                    <p class="article-text">L’exposition « Boom for Real » de la Barbican Art Gallery de Londres, est une rétrospective articulée autour d’une centaine d’œuvres de l’artiste Jean-Michel Basquiat – dessins, collages, peintures, carnets -, mais aussi de nombreuses photographies, films et mélodies qui commencent par ramener le visiteur dans le New York de la fin des années 70. <br>
                    La ville est alors au bord de la faillite financière, la criminalité a doublé en dix ans, le nombre de viols a triplé. Downtown est un chaos de rues mal entretenues, de boîtes underground, d’écrivains déjantés et de poseurs chics, un monde de funk et de punk music, habité par Grace Jones, Sid Vicious, Lou Reed, Klaus Nomi ou Andy Warhol. Ce sont ces visages, ces sons et ces lieux qui forment le bain originel d’où a émergé Jean-Michel Basquiat, après avoir quitté le domicile familial en 1977, à l’âge de 17 ans.
                    </p>
                </div>
            </div>
            
            <div class="row third-paragraph">
                <div class="col-md-12">
                    <p class="article-text">
                    En 1978, son ami Al Diaz et lui tagguent les murs, portes et ascenseurs d’un espace urbain déliquescent, y apposent la première marque de fabrique de Basquiat : SAMO©, comme Same Old Shit. En 1979, avec Jennifer Stein, l’artiste assemble, à partir de coupures de journaux ou de publicité, mégots de cigarettes et autres matériaux, des collages en format carte postale, qu’il vend $1 aux visiteurs qui font la queue devant le MoMA. <br>
                    On le voit bientôt tous les soirs au Mudd Club, qui vient d’ouvrir ses portes et où le sound system installé par Brian Eno fait vibrer la faune nocturne. Basquiat apparaît sur les plateaux de l’émission culte TV Party et incarne l’artiste bohême de New York Beat, dans lequel il crève l’écran. En 1981, il montre son travail dans plusieurs expositions de Manhattan. Son ascension s’accélère ensuite de manière fulgurante.
                    </p>
                </div>
            </div>
            
            <div class="row fourth-paragraph">
                <div class="col-md-12">
                    <p class="article-text">
                    Il se lie à Andy Warhol et, en 1982, à 21 ans, devient le plus jeune artiste jamais présenté à la Documenta de Cassel, aux côtés de géants tels que Joseph Beuys, Cy Twombly, Wilhelm de Kooning ou Anselm Kiefer. Siphon vorace, Basquiat absorbe les images du quotidien mais aussi des musées, puise son inspiration dans la ville, le jazz, dont il célèbre les géants, les Charlie Parker et les Miles Davis, et dans la peinture des Picasso, Matisse ou de Vinci.
                    </p>
                </div>
            </div>
            
            <div class="row fifth-paragraph">
                <div class="col-md-12">
                    <p class="article-sentence">
                     Ses œuvres se lisent comme des rébus qui auraient été produits par un expressionniste sauvage. On y trouve des symboles, des signes cryptiques, des personnages bruts, frustes, mais bourrés d’énergie.
                    </p>
                </div>
            </div>
            
            <div class="row sixth-paragraph">
                <div class="col-md-8">
                    <p class="article-text">
                    On découvre aussi un univers de mots, parfois barrés (« I cross out words so you will see them more », déclarait l’artiste lui-même), et on remonte le temps, vers les livres qui ont inspiré l’artiste, à commencer par la Bible. Les références à l’ancienne Égypte, aux guerres puniques, à la défaite d’Hannibal, se mêlent au bebop, au culte de l’athlète black Jessie Owens, aux notes d’astronomie ou aux planches d’anatomie de l’Encyclopédie.<br><br>
                    </p>
                    
                    <p class="article-text">
                    Couleurs vibrantes, crânes grimaçants, lettres et symboles s’entrechoquent pour produire l’effet de décharges électriques, saccadées à la manière d’un morceau de rap visuel. Parmi les œuvres présentées dans la pénombre de la Barbican Art Gallery, les lettres A et O se répètent souvent. À et O, comme Aaron, le frère de Moïse, ou comme Hank Aaron, le champion de baseball. À et O, l’Alpha et l’Omega, le premier et le dernier, le commencement et la fin. 
                    </p>
                    
                    <p class="article-sentence"> 
                    On voit défiler ici les dix années de trajectoire d’une étoile filante du monde de l’art contemporain, stoppée nette le 12 août 1988. Basquiat avait 27 ans. Une exposition magistrale.
                    </p>
                    
                </div>
        
                <div class="col-md-4">
                    <img class="img-responsive" src="<?php echo IMAGES_URL?>/article_img_c.jpg" >
                </div>
        
            </div>
        
            <div class="row article-end">
                <div class="center-block text-center">
                    <p class="home-return">
                    Retour à l'accueil
                    </p>
                    <a href=" http://localhost:8888/wordpressBasquiat/2017/11/16/"><img src="<?php echo IMAGES_URL?>/arrow-right.svg" alt="Accueil"></a>
                </div>
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


    </div> <!-- /container -->
</div><!-- /content -->

<?php get_footer(); //appel du template footer.php ?>