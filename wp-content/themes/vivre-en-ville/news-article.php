<?php 
/**
 * 	Template Name: article seul
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
          <div class="content__hero">
            <!-- Affiche le titre de l'article ou de la page actuelle -->
            <h2 class="title__hero">
              <?php the_title() ?>
            </h2>
             <!-- Affiche la date de publication de l'article ou de la page actuelle -->
            <p class="date__hero"><?php the_date() ?></p>
          </div>
<!-- Affiche l'image à la une de l'article ou de la page actuelle -->
          <?php the_post_thumbnail(array('class' => 'img__hero')) ?>
        </div>
      </section>

      <section class="news__content">
        <div class="container__content">
           <!-- Affiche le contenu principal de l'article ou de la page actuelle -->
          <?php the_content() ?>
        </div>
        <div class="article__btn">
          <div class="article__prec">
            <!-- Lien vers l'article précédent -->
            <a class="" href="">
              <button class="prec__btn"><?php the_field("libelle_du_bouton_article_precedent");?></button>
            </a>
          </div>

          <div class="article__prec">
            <a class="" href="">
              <button class="prec__btn"><?php the_field("libelle_du_bouton_article_suivant");?></button>
            </a>
          </div>
        </div>
      </section>

      <section class="nouvelles">
         <!-- Titre de la section affichant qu'il s'agit d'articles similaires -->
        <h2 class="nouvelles__titre">Articles similaire</h2>
        <div class="grid__articles">
            <!-- Premier article similaire -->
          <div class="nouvelle__item">
            <img
              src="sources/img/cout-demolition-maison-mitoyenne 1.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
               <!-- Titre de l'article -->
              <h3 class="nouvelle__titre">
                Stratégie québécoise en habitation: Québec reconnaît la crise,
                mais sous-utilise les outils à sa disposition
              </h3>
               <!-- Titre de l'article -->
              <p class="nouvelle__date">22 août 2024</p>
              <div class="nouvelle__esp nouvelle__lien">
                <!-- Lien vers l'article avec un bouton "En savoir plus" -->
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
 <!-- Deuxième article similaire -->
          <div class="nouvelle__item">
            <img
              src="sources/img/evenement_rentree.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
               <!-- Titre de l'article -->
              <h3 class="nouvelle__titre">Événement de la rentrée 2024</h3>
               <!-- Date de publication de l'article -->
              <p class="nouvelle__date">13 août 2024</p>
              <div class="nouvelle__esp nouvelle__lien">
                <a
                  class="link__button"
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target=""
                >
                <!-- Lien vers l'article avec un bouton "En savoir plus" -->
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
   <!-- Troisième article similaire -->
          <div class="nouvelle__item">
            <img
              src="sources/img/etudeleger.png"
              alt="News image"
              class="nouvelle__image"
            />
            <div class="nouvelle__content">
               <!-- Titre de l'article -->
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
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>