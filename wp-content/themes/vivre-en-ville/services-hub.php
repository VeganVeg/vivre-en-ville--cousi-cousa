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
		

      <!--banniere-->
      <section class="banniere">
        <div class="grid__banniere">
          <div class="banniere__txt">
            <span
              >Ce site web sert de projet scolaire et n'est en aucun cas le vrai
              site Vivre en Ville. Pour vous rendre sur le vrai site cliquez sur
              ce lien :<a href="https://vivreenville.org/">
                https://vivreenville.org/</a></span>
          </div>

          <div class="banniere__btn">
            <button class="btn__compris">J'ai compris</button>
          </div>
        </div>
      </section>

      <section class="news__hero">
        <div class="container__hero">
          <div class="content__hero__newshub">
            <h2 class="title__hero">Nos services offerts</h2>
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
              <button class="btn">En savoir plus</button>
            </a>
          </div>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>

          <!--<div class="services__bloc publication-hub__bloc">
            <div class="services-hub__title publication-hub__title">
              Publication
            </div>
            <div class="services-hub__txt publication-hub__txt">
              Des outils pour renforcer l'expertise et inspirer les intervenants
              québécois dans leurs projets.
            </div>

            
          </div>
          <div class="services-hub__btn">
            <a class="" href="">
              <button class="btn">En savoir plus</button>
            </a>
          </div>

          <div class="services__bloc formation-hub__bloc">
            <div class="services-hub__title formation-hub__title">
              Formation
            </div>
            <div class="services-hub__txt formation-hub__txt">
              Une panoplie de conférences, d'ateliers, de colloques et de
              missions sur de nombreux thèmes liés aux collectivités viables.
            </div>

            
          </div>
          <div class="services-hub__btn">
            <a class="" href="">
              <button class="btn">En savoir plus</button>
            </a>
          </div>

          <div class="services__bloc conseil-hub__bloc">
            <div class="services-hub__title conseil-hub__title">
              Conseil et accompagnement
            </div>
            <div class="services-hub__txt conseil-hub__txt">
              Notre offre variée permet aux municipalités, organisations
              publiques, ou entreprises de mettre en œuvre des projets
              d'avant-garde.
            </div>

            
          </div>
          <div class="services-hub__btn">
            <a class="" href="">
              <button class="btn">En savoir plus</button>
            </a>
          </div>

          <div class="services__bloc sensibilisation-hub__bloc">
            <div class="services-hub__title sensibilisation-hub__title">
              Sensibilisation
            </div>
            <div class="services-hub__txt sensibilisation-hub__txt">
              Une expérience pointue dans la sensibilisation du public et la
              vulgarisation.
            </div>

            
          </div>
          <div class="services-hub__btn">
            <a class="" href="">
              <button class="btn">En savoir plus</button>
            </a>
          </div>-->
        </div>
      </section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>