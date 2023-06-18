<?php

get_header();

?>
    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay muted loop id="bg-video" class="video">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/Studio+Koukaki-video+header+sans+son.mp4'; ?>" type="video/mp4">
            </video>
            <img class="fallback-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'?>">
            <img class="logo-header" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
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
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php
                            while ($characters_query->have_posts()) : ?>
                                <?php $characters_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <figure>
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                        <figcaption>
                                            <?php the_title(); ?>
                                        </figcaption>
                                    </figure>
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
            </article>
            <article id="place">
                <div class="clouds">
                    <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png' ?>" alt="petit nuage">
                    <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png' ?>" alt="grand nuage">
                </div>
                
                <div class="place">
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>
        <section id="studio">
            <h2 class="title">
                <div class="studio-text">Studio</div>
                <div class="koukaki-text">Koukaki</div>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
            <?php get_template_part('template-parts/oscar-section'); ?>

    </main><!-- #main -->

<?php
get_footer();
