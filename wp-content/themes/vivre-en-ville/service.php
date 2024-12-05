<?php 
/**
 * 	Template Name: service seul
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>

			<section class="services__hero">
                <div class="container__hero">
                    <div class="content__hero__serviceshub">
                        <h2 class="title__hero"><?php the_title() ?></h2>
                    </div>
                    <div class="img__hero__wrapper">
                        <img class="img__hero" src="sources/img/innovation.png" alt="Recherche et innovation">
                    </div>
                </div>
            </section>

            <section class="service-section">
                <div class="service-content">
					<?php the_content() ?>
                </div>
            </section>
            <div class="service__btn-wrapper">
                <a class="service__link" href="#" target="_blank"> <!--service-page.html-->
                    <button class="service__btn">Suivant</button>
                </a>
            </div>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>