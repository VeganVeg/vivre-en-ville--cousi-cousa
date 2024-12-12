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
                <a class="link__button" href="news-article.html" target="<?php the_permalink() ?>">
                  <button class="esp"><?php the_field('libelle_du_bouton_en_savoir_plus')?></button></a
                >
              </div>
            </div>
            <div class="nouvelle__btn">
              <div class="nouvelle__esp nouvelle__lien-none">
                <a class="link__button" href="news-article.html" target="<?php the_permalink() ?>">
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
        </div>
      </section>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>