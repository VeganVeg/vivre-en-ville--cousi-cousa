<?php 
/**
 * 	Template Name: accueil
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<section class="carrousel">
        <div class="grid__carrousel">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img
                  class="swiper__img swiper__img__prog"
                  src="sources/img/proganuelle.png"
                  alt=""
                />
                <div class="swiper__bg">
                  <div class="bg__title">
                    LA PROGRAMMATION ANNUELLE 2024-2025 EST LÀ!
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <img
                  class="swiper__img swiper__img__champ"
                  src="sources/img/Visuel_FDDN.jpg"
                />
                <div class="swiper__bg">
                  <div class="bg__title">
                    La nouvelle plateforme de diffusion des contenus et des
                    outils de Vivre en Ville
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <img
                  class="swiper__img swiper__img__ordi"
                  src="sources/img/carrefour-3.png"
                  alt=""
                />
                <div class="swiper__bg">
                  <div class="bg__title">
                    Plusieurs plans, une même conversation
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>

      <!--à propos-->
      <section class="about">
        <div class="grid__about">
          <h2 class="about__title"><?php the_title() ?></h2>
          <div class="about__text">
            <?php the_content() ?>
          </div>
        </div>
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <!--services-->
      <section class="services__offerts">
        <h2 class="services__title"><?php the_field('titre_pour_services') ?></h2>
        <div class="services__container">
          <?php 
              $service = new WP_Query('post_type=service');
              while ($service->have_posts()) : $service->the_post();
              ?>
            <div class="service services__<?php the_field('choix_de_classe')?>">
              <div class="card__title <?php the_field('choix_de_classe')?>__title title-none">
                <?php the_title() ?>
              </div>
                <?php the_post_thumbnail(array('class' => "card__img title-none img__service")) ?>
              
              <!--<img
                class="card__img img__microscope title-none"
                src="sources/icons/microscope.png"
                alt=""
              /> -->
              <div class="card__txt <?php the_field('choix_de_classe')?>__txt txt-block">
                <p><?php the_content()?></p>
              </div>
              <img
                class="img__hover title-none"
                src="sources/icons/hover_recherche.png"
                alt=""
              />
            </div>
            <?php
              endwhile;
              wp_reset_postdata();
            ?>
        </div> 
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <section class="nouvelles">
        <h2 class="nouvelles__titre"><?php the_field('titre_actualites') ?></h2>
        <div class="grid__nouvelles">
          <!-- Boucle de tout les articles -->
        <?php 
            $nouvellehome = new WP_Query('post_type=nouvelle-home');
            while ($nouvellehome->have_posts()) : $nouvellehome->the_post();
            ?>
          <div class="nouvelle__item">
            <?php the_post_thumbnail() ?>
            <div class="nouvelle__content">
              <h3><?php the_title() ?></h3>
              <p><?php the_date() ?></p>
              <div class="nouvelle__esp nouvelle__lien">
                <a class="link__button" href="news-article.html" target="">
                  <button class="esp"><?php the_field('libelle_du_bouton_en_savoir_plus')?></button></a
                >
              </div>
            </div>
            <div class="nouvelle__btn">
              <div class="nouvelle__esp nouvelle__lien-none">
                <a class="link__button" href="news-article.html" target="">
                  <button class="esp"><?php the_field('libelle_du_bouton_en_savoir_plus')?></button></a
                >
              </div>
            </div>
          </div>

          <div class="nouvelle__separation"></div>
          <?php
            endwhile;
            wp_reset_postdata();
          ?>

          <!--<div class="nouvelle__item">
            <img
              src="sources/img/evenement_rentree.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
              <h3 class="nouvelle__titre">Événement de la rentrée 2024</h3>
              <p class="nouvelle__date">13 août 2024</p>
              <div class="nouvelle__esp nouvelle__lien">
                <a
                  class="link__button"
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target=""
                >
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
            <div class="nouvelle__btn">
              <div class="nouvelle__esp nouvelle__lien-none">
                <a
                  class="link__button"
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target=""
                >
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
          </div>

          <div class="nouvelle__separation"></div>

          <div class="nouvelle__item">
            <img
              src="sources/img/etudeleger.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
              <h3 class="nouvelle__titre">
                Étude Léger sur le marché résidentiel locatif: Du jamais vu à
                Montréal - Les données 2024 rappellent l'urgence du besoin de
                transparence pour le bon fonctionnement du marché résidentiel
              </h3>
              <p class="nouvelle__date">22 août 2024</p>
              <div class="nouvelle__esp nouvelle__lien">
                <a
                  class="link__button"
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target=""
                >
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
            <div class="nouvelle__btn">
              <div class="nouvelle__esp nouvelle__lien-none">
                <a
                  class="link__button"
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target=""
                >
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
          </div>-->
        </div>
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <section class="temoignages">
        <h2 class="temoignages__titre"><?php the_field('titre_pour_temoignages') ?></h2>
        <div class="grid__temoignages">
          <?php 
            $temoingagne = new WP_Query('post_type=temoignage');
            while ($temoingagne->have_posts()) : $temoingagne->the_post();
          ?>
          <div class="temoignage__item">
            <?php the_post_thumbnail(array('class' => 'temoignage__photo')) ?>
            <h3 class="temoignage__nom"><?php the_title() ?></h3>
            <p class="temoignage__texte">
              <?php the_content() ?>
            </p>
          </div>

          <div class="temoignage__separation"></div>

          <?php
            endwhile;
            wp_reset_postdata();
          ?>
        </div>
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <section class="don">
        <div class="donner">
			<?php  
				$don = new WP_Query('post_type=don');
            	while ($don->have_posts()) : $don->the_post();
			?>
          <h2 class="donner__title">
            <?php the_title(); ?>
          </h2>
          <div class="donner__text">
			<?php the_content() ?>
		</div>
          <a
            href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
            target="_blank"
          >
            <button class="btn__don" type="button">
              <?php the_field('libelle_du_bouton_faire_un_don'); ?>
              <span class="heart__span">
                  <!-- ? xml version="1.0" encoding="utf-8" ?> -->  <!--Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg
                  class="heart"
                  viewBox="0 0 16 16"
                  xmlns="http://www.w3.org/2000/svg"
                  fill=""
                >
                  <path
                    fill=""
                    d="M11.434 1a4.604 4.604 0 00-3.226 1.322L8 2.527l-.208-.205A4.589 4.589 0 004.566 1 4.589 4.589 0 001.34 2.322 4.5 4.5 0 000 5.522a4.5 4.5 0 001.34 3.2l6.133 6.061a.75.75 0 001.054 0l6.132-6.06a4.52 4.52 0 00.992-1.467 4.482 4.482 0 00-.992-4.934A4.604 4.604 0 0011.433 1z"
                  />
                </svg>
              </span>
            </button>
          </a>
		  <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
      </section>
		<?php endif; ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>