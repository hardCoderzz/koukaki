<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop id="bg-video">
                <source src="<?php echo get_stylesheet_directory_uri() . './assets/videos/Studio+Koukaki-vidéo+header+sans+son.mp4'; ?>" type="video/mp4">
            </video>
            <img src="<?php echo get_template_directory_uri() . './assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2 class="title"><span class="the-story-title">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
            <div class="characters">
                <h3>Les personnages</h3>
                <div class="swiper-container">
                    <div class="swiper-wrapper" >
                        <?php
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide">';
                            echo '<figure>';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo '</figcaption>';
                            echo '</figure>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            </article>
            <article id="place">
                <div class="clouds">
                    <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . './assets/images/little_cloud.png' ?>" alt="petit nuage">
                    <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() . './assets/images/big_cloud.png' ?>" alt="grand nuage">
                </div>
                
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="title"><span class="studio-text">Studio </span><span class="koukaki-text">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <section id="oscar"  class="oscar">
            <article>
                <img class="text-bg" src="<?php echo get_stylesheet_directory_uri () . './assets/images/oscar-texte.png'?>" alt="orange text background">
                <img class="oscar-img" src="<?php echo get_stylesheet_directory_uri () . './assets/images/oscar_nomination.png'?>" alt="orange text background">
            </article>
        </section>

    </main><!-- #main -->

<?php
get_footer();
