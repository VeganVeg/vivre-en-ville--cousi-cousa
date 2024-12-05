<?php 
/**
 * 	Template Name: Équipe
 * 	Template Post Type: page, post, article, membre,
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post();
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>


		<!--banniere-->
		<section class="banniere">
        <div class="grid__banniere">
          <div class="banniere__txt">
            <span
              >Ce site web sert de projet scolaire et n'est en aucun cas le vrai
              site Vivre en Ville. Pour vous rendre sur le vrai site cliquez sur
              ce lien :<a clas href="https://vivreenville.org/">
                https://vivreenville.org/</a
              ></span
            >
          </div>

          <div class="banniere__btn">
            <button class="btn__compris">J'ai compris</button>
          </div>
        </div>
      </section>

      <section class="team">
        <h1>Notre Équipe</h1>
        <div class="team_profile">
          <?php 
            $membre = new WP_Query('post_type=membre');
            while ($membre->have_posts()) : $membre->the_post();
          ?>
          <div class="<?php the_field('name')?>" id="<?php the_field('id_choice')?>">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id01').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id01').style.display='none'"
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