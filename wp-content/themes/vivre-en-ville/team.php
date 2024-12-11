<?php 
/**
 * 	Template Name: Équipe
 * 	Template Post Type: page, post, article,
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post();
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>

      <section class="team">
        <h1><?php the_title(); ?></h1>
        <div class="team_profile">
          <?php
            $arguments = array(
              'post_type' => 'membre',
              'order' => 'ASC',
              'orderby' => 'date'
            );

            $membre = new WP_Query($arguments);
            while ($membre->have_posts()) : $membre->the_post();
          ?>
          <div class="<?php the_field('name')?>" id="<?php the_field('id_choice')?>">
            <div class="w3-container">
              <button
                onclick="document.getElementById('<?php the_field('choix_du_id') ?>').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="<?php the_field('choix_du_id') ?>" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('<?php the_field('choix_du_id') ?>').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      <?php the_content() ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3><?php the_title(); ?></h3>
            <?php the_post_thumbnail(); ?>
          </div>
          <hr />
          <?php 
            endwhile;
            wp_reset_postdata();
            ?>

        </div>
      </section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>