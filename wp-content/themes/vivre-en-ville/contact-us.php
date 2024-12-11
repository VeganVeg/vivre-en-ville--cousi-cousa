<?php 
/**
 * 	Template Name: contactez-nous
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>

		<section class="nous-joindre">
            <div class="nous-joindre__container">
                <h1 class="nous-joindre__titre"><?php the_title() ?></h1>
                <div class="nous-joindre__grid">
                    <div class="nous-joindre__info">
                        <h2 class="nous-joindre__sous-titre"><?php the_field('information_de_contact')?></h2>
                        <ul class="nous-joindre__liste">
                            <li class="nous-joindre__item"><strong><?php the_field('telephone') ?> :</strong> <a href="tel:514-394-1125" class="nous-joindre__lien">514-394-1125</a></li>
                            <li class="nous-joindre__item"><strong><?php the_field('email')  ?> :</strong> <a href="mailto:info@vivreenville.org" class="nous-joindre__lien">info@vivreenville.org</a></li>
                            <li class="nous-joindre__item"><strong><?php the_field('adresse') ?> :</strong> 50, rue Ste-Catherine Ouest, bur. 480, Montréal (Québec) H2X 3V4</li>
                        </ul>
                    </div>
                    <div class="nous-joindre__formulaire">
                        <h2 class="nous-joindre__sous-titre"><?php the_field('formulaire_de_contact') ?></h2>
                        <form class="nous-joindre__form">
                            <div class="nous-joindre__groupe">
                                <label for="name" class="nous-joindre__label"><?php the_field('name') ?></label>
                                <input type="text" class="nous-joindre__input" id="name" required>
                            </div>
                            <div class="nous-joindre__groupe">
                                <label for="email" class="nous-joindre__label"><?php the_field('email') ?></label>
                                <input type="email" class="nous-joindre__input" id="email" required>
                            </div>
                            <div class="nous-joindre__groupe">
                                <label for="message" class="nous-joindre__label"><?php the_field('message') ?></label>
                                <textarea class="nous-joindre__textarea" id="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="nous-joindre__bouton"><?php the_field('libelle_du_bouton_envoyer')?></button>
                        </form>
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