<?php 
/**
 * 	Template Name: Tous les services
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
		
		<main>
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

      <section class="news__hero">
        <div class="container__hero">
          <div class="content__hero__newshub">
            <h2 class="title__hero">Nos services offerts</h2>
          </div>

          <img class="img__hero" src="sources/img/services.jpg" alt="" />
        </div>
      </section>

      <section class="services-hub__list">
        <div class="services-hub__container">
          <div class="services__bloc recherche-hub__bloc">
            <div class="services-hub__title recherche-hub__title">
              Recherche et innovation
            </div>
            <div class="services-hub__txt recherche-hub__txt">
              Explorer, diffuser et expérimenter les meilleures pratiques de
              développement de collectivités viables.
            </div>

            <img class="img-hub" src="sources/icons/microscope.png" alt="" />
          </div>
          <div class="services-hub__btn">
            <a href="service.html">
              <button class="btn">En savoir plus</button>
            </a>
          </div>

          <div class="services__bloc publication-hub__bloc">
            <div class="services-hub__title publication-hub__title">
              Publication
            </div>
            <div class="services-hub__txt publication-hub__txt">
              Des outils pour renforcer l'expertise et inspirer les intervenants
              québécois dans leurs projets.
            </div>

            <img class="img-hub" src="sources/icons/news.png" alt="" />
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

            <img class="img-hub" src="sources/icons/diploma.png" alt="" />
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

            <img class="img-hub" src="sources/icons/ampoule.png" alt="" />
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

            <img class="img-hub" src="sources/icons/annonce.png" alt="" />
          </div>
          <div class="services-hub__btn">
            <a class="" href="">
              <button class="btn">En savoir plus</button>
            </a>
          </div>
        </div>
      </section>
    </main>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>