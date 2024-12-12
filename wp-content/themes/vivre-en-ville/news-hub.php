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
        <div class="nouvelle__separation"></div>
        <!-- Boucle de tout les articles -->
        <?php 
            $nouvelle = new WP_Query('post_type=nouvelle');
            while ($nouvelle->have_posts()) : $nouvelle->the_post();
            ?>
          <div class="nouvelle__item__newshub">
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
                  <a class="link__button" href="news-article.html" target="">
                    <!-- Bouton en savoir plus -->
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

          

          <div class="plus__container">
            <a href="">
              <button class="plus__articles"><?php the_field('libelle_du_bouton_voir_plus_article') ?></button>
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