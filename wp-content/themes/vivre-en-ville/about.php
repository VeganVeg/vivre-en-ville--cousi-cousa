<?php 
/**
 * 	Template Name: À propos
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>
		
	

		<section class="a-propos">
        <h1><?php the_title() ?></h1>
        <?php the_post_thumbnail('meddium') ?>
        <div class="mission">
          <?php the_content() ?>
        </div>
      </section>
      
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;



get_footer(); // Affiche footer.php 
?>