<?php 
/**
 * 	Template Name: Tous les articles
 * 	Template Post Type: page, post, article
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
          <?php the_post_thumbnail(array('class' => 'img__hero')) ?>
        </div>
      </section>

      <section class="nouvelles">
        <?php the_content() ?>
        <div class="grid__nouvelles__newshub">
        <?php 
                $nouvelle = new WP_Query('post_type=nouvelle');
                while ($nouvelle->have_post()) : $nouvelle->the_post();
              ?>
          <div class="nouvelle__item__newshub">
          <?php the_post_thumbnail() ?>
            <div class="nouvelle__content">

              <h3><?php the_title() ?></h3>
              <p><?php the_content() ?></p>
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
          <?php 
              endwhile;
              wp_reset_postdata();
              ?>

          <div class="nouvelle__separation"></div>

      <!--<div class="nouvelle__item__newshub">
            <img
              src="<?php bloginfo('template_url'); ?>/sources/img/evenement_rentree.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
              <h3 class="">Événement de la rentrée 2024</h3>
              <p class="">13 août 2024</p>
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

          <div class="nouvelle__item__newshub">
            <img
              src="<?php bloginfo('template_url'); ?>/sources/img/etudeleger.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
              <h3 class="">
                Étude Léger sur le marché résidentiel locatif: Du jamais vu à
                Montréal - Les données 2024 rappellent l'urgence du besoin de
                transparence pour le bon fonctionnement du marché résidentiel
              </h3>
              <p class="">22 août 2024</p>
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

          <div class="nouvelle__item__newshub">
            <img
              src="<?php bloginfo('template_url'); ?>/sources/img/tramway.png" alt="News image" class="nouvelle__image"/>
            <div class="nouvelle__content">
              <h3 class="">
                Entente avec CDPQ sur le tramway de Québec: un pas important
                vers la réalisation du projet
              </h3>
              <p class="">9 octobre 2024</p>
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
                  target="">
                  <button class="esp">En savoir plus</button></a>
              </div>
            </div>
          </div>-->

          <div class="plus__container">
            <a href="">
              <button class="plus__articles">Voir plus d'articles</button>
            </a>
          </div>
        </div>
      </section>
		
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>