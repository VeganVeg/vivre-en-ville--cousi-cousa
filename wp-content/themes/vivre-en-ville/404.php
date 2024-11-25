<?php 
/**
 * 	Template Name: Erreur 404
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>
		
        <section class="error">
        <div class="error__container">
          <h1><?php post_title() ?></h1>
          <h2>
            Mauvais chemin ... je pense que pour
            <span class="logo-error">vivre en ville</span> vous deviez tourner a
            droite.
          </h2>
          <div class="gif-404">
            <iframe src="https://giphy.com/embed/mPytjcsG3XS4o"></iframe>
          </div>
        </div>
      </section>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>