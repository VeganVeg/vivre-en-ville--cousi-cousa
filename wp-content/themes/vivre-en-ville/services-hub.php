<?php 
/**
 * 	Template Name: Tous les services
 * 	Template Post Type: page, post, article, service
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>

      <section class="news__hero">
        <div class="container__hero">
          <div class="content__hero__newshub">
            <h2 class="title__hero"><?php the_title() ?></h2>
          </div>

          <img class="img__hero" src="<?php bloginfo('template_url'); ?>/sources/img/services.jpg" alt="" />
        </div>
      </section>

      <section class="services-hub__list">
        <div class="services-hub__container">
          <?php 
            $service = new WP_Query('post_type=service');
            while ($service->have_posts()) : $service->the_post();
            ?>
          <div class="services__bloc <?php the_field('choix_de_classe')?>-hub__bloc">
            <div class="services-hub__title <?php the_field('choix_de_classe')?>-hub__title">
              <?php the_title()?>
            </div>
            <div class="services-hub__txt <?php the_field('choix_de_classe')?>-hub__txt">
              <?php the_content()?>
            </div>

            <?php the_post_thumbnail(array('class' => 'img-hub')) ?>
          </div>
          <div class="services-hub__btn">
            <a href="service.html">
              <button class="btn"><?php the_field('libelle_du_bouton_en_savoir_plus')?></button>
            </a>
          </div>
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