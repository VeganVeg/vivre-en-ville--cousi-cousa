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
        <h2 class="services__title">Nos services offerts</h2>
        <div class="services__container">
          <?php 
              $service = new WP_Query('post_type=service');
              while ($service->have_posts()) : $service->the_post();
              ?>
            <div class="service services__<?php the_field('choix_de_classe')?>">
              <div class="card__title <?php the_field('choix_de_classe')?>__title title-none">
                <?php the_title() ?>
              </div>
                <?php the_post_thumbnail(array('class' => "card__img title-none img__<?php the_field('choix_de_classe')?>")) ?>
              
              <!--<img
                class="card__img img__microscope title-none"
                src="sources/icons/microscope.png"
                alt=""
              /> -->
              <div class="card__txt <?php the_field('choix_de_classe')?>__txt txt-block">
                <?php the_content() ?>
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
          <!-- <div class="service services__publication">
            <div class="card__title publication__title title-none">
              Publication
            </div>
            <img
              class="card__img img__publication title-none"
              src="sources/icons/news.png"
              alt=""
            />
            <div class="card__txt publication__txt txt-block">
              Des outils pour renforcer l'expertise et inspirer les intervenants
              québécois dans leurs projets.
            </div>
            <img
              class="img__hover title-none"
              src="sources/icons/hover_publication.png"
              alt=""
            />
          </div>

          <div class="service services__formation">
            <div class="card__title formation__title title-none">Formation</div>
            <img
              class="card__img img__formation title-none"
              src="sources/icons/diploma.png"
              alt=""
            />
            <div class="card__txt formation__txt txt-block">
              Une panoplie de conférences, d'ateliers, de colloques et de
              missions sur de nombreux thèmes.
            </div>
            <img
              class="img__hover title-none"
              src="sources/icons/hover_formation.png"
              alt=""
            />
          </div>

          <div class="service services__conseil">
            <div class="card__title conseil__title title-none">
              Conseil et accompagnement
            </div>
            <img
              class="card__img img__conseil title-none"
              src="sources/icons/ampoule.png"
              alt=""
            />
            <div class="card__txt conseil__txt txt-block">
              Notre offre variée permet aux municipalités, organisations
              publiques, ou entreprises de mettre en œuvre des projets
              d'avant-garde.
            </div>
            <img
              class="img__hover title-none"
              src="sources/icons/hover_conseil.png"
              alt=""
            />
          </div>

          <div class="service services__sensibilisation">
            <div class="card__title sensibilisation__title title-none">
              Sensibilisation
            </div>
            <img
              class="card__img img__sensibilisation title-none"
              src="sources/icons/annonce.png"
              alt=""
            />
            <div class="card__txt sensibilisation__txt txt-block">
              Une expérience pointue dans la sensibilisation du public et la
              vulgarisation.
            </div>
            <img
              class="img__hover title-none"
              src="sources/icons/hover_sensibilisation.png"
              alt=""
            /> 
          </div> -->
        </div> 
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <section class="nouvelles">
        <h2 class="nouvelles__titre">Les actualités</h2>
        <div class="grid__nouvelles">
          <div class="nouvelle__item">
            <img
              src="sources/img/cout-demolition-maison-mitoyenne 1.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
              <h3 class="nouvelle__titre">
                Stratégie québécoise en habitation: Québec reconnaît la crise,
                mais sous-utilise les outils à sa disposition
              </h3>
              <p class="nouvelle__date">22 août 2024</p>
              <div class="nouvelle__esp nouvelle__lien">
                <a class="link__button" href="news-article.html" target="">
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
            <div class="nouvelle__btn">
              <div class="nouvelle__esp nouvelle__lien-none">
                <a class="link__button" href="news-article.html" target="">
                  <button class="esp">En savoir plus</button></a
                >
              </div>
            </div>
          </div>

          <div class="nouvelle__separation"></div>

          <div class="nouvelle__item">
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
          </div>
        </div>
      </section>

      <div class="next__chapter">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
      </div>

      <section class="temoignages">
        <h2 class="temoignages__titre">Qu'en disent nos utilisateurs ?</h2>
        <div class="grid__temoignages">
          <div class="temoignage__item">
            <img
              class="temoignage__photo"
              src="sources/img/robertcharlebois.png"
              alt="Robert Charlebois"
            />
            <h3 class="temoignage__nom">Robert Charlebois</h3>
            <p class="temoignage__texte">
              Après avoir visité ce site pour la première fois, j'ai découvert à
              quel point il était important de rester informé sur les dernières
              tendances et sur les projets actuels en urbanisme.
            </p>
          </div>

          <div class="temoignage__separation"></div>

          <div class="temoignage__item">
            <img
              class="temoignage__photo"
              src="sources/img/king.png"
              alt="Le king des kings"
            />
            <h3 class="temoignage__nom">Le king des kings</h3>
            <p class="temoignage__texte">
              Vivre en Ville est selon moi un des meilleurs sites web pour être
              en mesure d’améliorer sa qualité de vie.
            </p>
          </div>

          <div class="temoignage__separation"></div>

          <div class="temoignage__item">
            <img
              class="temoignage__photo"
              src="sources/img/jack.png"
              alt="Jack-Jack"
            />
            <h3 class="temoignage__nom">Jack-Jack</h3>
            <p class="temoignage__texte">
              J'ai beaucoup appris sur les différentes façons d'améliorer la
              qualité de vie dans les villes. Ce site est une excellente
              ressource.
            </p>
          </div>
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