<?php 
/**
 * 	Template Name: À propos
 * 	Template Post Type: page, post, article
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>

		<section class="a-propos">
        <h1>À Propos de Vivre en Ville</h1>
        <img  src="<?php bloginfo('template_url'); ?>/sources/img/about-img.jpg" alt="about-img" />
        <div class="mission">
          <h2>Notre Mission</h2>
          <p>
            Vivre en Ville ouvre la voie aux nécessaires transformations du
            territoire et de nos milieux de vie.
          </p>
          <br />
          <p>
            Notre approche mise sur la sobriété, la proximité et le renforcement
            des solidarités pour soutenir l’épanouissement de tous et toutes,
            assurer la vitalité des collectivités, préserver la santé des
            écosystèmes et traverser les crises.
          </p>
          <br />
          <p>
            Depuis près de 30 ans, Vivre en Ville met l’audace, la rigueur et la
            collaboration au service de l’intérêt collectif. Combinant des
            compétences variées et complémentaires en aménagement, mobilité,
            alimentation, habitation et verdissement, son équipe propose des
            stratégies sensibles à chaque milieu et déclinées à toutes les
            échelles.
          </p>
          <br />
          <p>
            Organisation à but non lucratif, Vivre en Ville est reconnue tant
            pour sa contribution au débat public que pour ses nombreuses
            publications et ses activités de formation, de sensibilisation et
            d’accompagnement, menées partout au Québec.
          </p>
        </div>
        <div class="next__chapter">
          <div class="circle"></div>
          <div class="circle"></div>
          <div class="circle"></div>
        </div>

        <div class="approche">
          <h2>Notre approche</h2>
          <p>
            Vivre en Ville vise un profond changement dans le mode de
            développement des collectivités. Dans ses projets, ses interventions
            et ses collaborations, l’organisation adopte une approche :
          </p>
          <br />
          <ul>
            <li>
              <strong>ancrée sur le territoire</strong>, qui s’intéresse en
              particulier à la forme urbaine, à l’aménagement du territoire et à
              l’urbanisme;
            </li>
            <li>
              <strong>transversale</strong>, qui tend à l’arrimage des pratiques
              et à la multidisciplinarité;
            </li>
            <li>
              <strong>structurée</strong>, qui se décline à plusieurs échelles,
              du bâtiment à la rue, au quartier, et à l’agglomération;
            </li>
            <li>
              <strong>inspirante</strong>, qui stimule l’innovation par la
              recherche, la formation, la démonstration, le conseil et
              l’accompagnement;
            </li>
            <li>
              <strong>ambitieuse</strong>, qui prône un changement radical dans
              le mode de développement urbain;
            </li>
            <li>
              <strong>accessible</strong>, qui s’adresse aux citoyens aussi bien
              qu’aux spécialistes;
            </li>
            <li>
              <strong>impliquée</strong>, qui passe par la participation au
              débat public sur les lois, politiques et pratiques touchant la
              qualité des milieux de vie;
            </li>
            <li>
              <strong>réaliste</strong>, qui s’adapte au type de collectivité et
              au contexte du milieu;
            </li>
            <li>
              <strong>mobilisatrice</strong>, qui mise sur l’alliance et le
              partenariat;
            </li>
            <li>
              <strong>rigoureuse</strong>, qui allie persévérance, travail de
              qualité et professionnalisme.
            </li>
          </ul>
        </div>
      </section>



	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>