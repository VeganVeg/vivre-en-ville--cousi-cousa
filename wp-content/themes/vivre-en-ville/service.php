<?php 
/**
 * 	Template Name: service seul
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>

		<section class="services__hero">
                <div class="container__hero">
                    <div class="content__hero__serviceshub">
                        <h2 class="title__hero">Recherche et innovation</h2>
                    </div>
                    <div class="img__hero__wrapper">
                        <img class="img__hero" src="sources/img/three-people-talking.jpg" alt="Recherche et innovation">
                    </div>
                </div>
            </section>

            <section class="service-section">
                <div class="service-content">
                    <h3 class="service-subtitle">Développer les connaissances</h3>
                    <p class="service-description">
                        Pour diffuser auprès des intervenants québécois les meilleurs exemples de développement de collectivités viables, Vivre en Ville mène depuis 20 ans des recherches approfondies dans ce domaine. Une veille scientifique permanente, des missions de recherche
                        au Québec et à l'international, la rencontre d'experts de domaines variés, la participation à de nombreux colloques et conférences ont permis à son équipe de développer une vision intégrée et des connaissances pointues sur les
                        différents aspects du développement viable des collectivités.
                    </p>
                    <h3 class="service-list-title">Recherches en cours</h3>
                    <ul class="service-list">
                        <li>Le contrôle de l'étalement urbain</li>
                        <li>L'aménagement de milieux de vie de qualité</li>
                        <li>Le déploiement d'une offre de mobilité durable</li>
                        <li>Le climat et le mode de développement urbain</li>
                        <li>Le lien entre environnement bâti et santé</li>
                        <li>Les petites et moyennes collectivités</li>
                        <li>La localisation des activités</li>
                        <li>Les questions sociales et la participation citoyenne, etc.</li>
                    </ul>
                    <h3 class="service-subtitle">Missions de recherche</h3>
                    <p class="service-description">
                        L'équipe de Vivre en Ville effectue fréquemment des missions de recherche. Ces dernières sont destinées à étudier des exemples et pratiques ailleurs dans le monde afin d'alimenter la réflexion et de pouvoir transmettre ces connaissances aux acteurs québécois.
                    </p>
                    <h3 class="service-subtitle">Innover sur le terrain</h3>
                    <p class="service-description">
                        À la fine pointe de la connaissance, Vivre en Ville met ses recherches à profit dans le cadre de projets pilotes afin de stimuler l'émergence de nombreux projets innovants. Inspirées des meilleures pratiques, nos idées prennent vie en partenariat avec
                        des acteurs motivés.
                    </p>
                    <h3 class="service-list-title">Nos projets pilotes</h3>
                    <ul class="service-list">
                        <li>Végétalisation du Centre culture et environnement Frédéric Back</li>
                        <li>Verdir un milieu de vie : Cœur vaillant</li>
                        <li>Mise en place des centres de gestion des déplacements de la Capitale Nationale et de l'Outaouais (Mobili-T et MOBI-O)</li>
                        <li>Aménager des milieux de vie favorables à un vieillissement en santé</li>
                    </ul>
                </div>
                </div>
            </section>
            <div class="service__btn-wrapper">
                <a class="service__link" href="#" target="_blank"> <!--service-page.html-->
                    <button class="service__btn">Suivant</button>
                </a>
            </div>
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>