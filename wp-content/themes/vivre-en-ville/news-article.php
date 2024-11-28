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
            <h2 class="title__hero">
              Stratégie québécoise en habitation: Québec reconnaît la crise,
              mais sous-utilise les outils à sa disposition
            </h2>
            <p class="date__hero">22 août 2024</p>
          </div>

          <img
            class="img__hero"
            src="sources/img/strategie_habitation.png"
            alt=""
          />
        </div>
      </section>

      <section class="news__content">
        <div class="container__content">
          <p class="para p1">
            <span>Québec, le 22 août 2024</span> - Vivre en Ville accueille avec
            intérêt la Stratégie québécoise en habitation dévoilée cet
            après-midi par la ministre France-Élaine Duranceau. En déployant une
            action interministérielle, le gouvernement du Québec reconnaît pour
            une première fois l'envergure du problème et l'importance de
            considérer une diversité de facteurs à l'origine de la crise de
            l'habitation. Cela dit, la cible nationale de mises en chantier et
            les moyens annoncés témoignent d'une timidité étonnante.
          </p>

          <div class="next__chapter">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>

          <h3 class="para para__subtitle">
            Une cible, mais beaucoup de questions en suspens
          </h3>

          <p class="para p2">
            Vivre en Ville salue l'adoption d'une cible nationale de
            construction d'unités d'habitation, mais comme plusieurs acteurs du
            milieu de l'habitation, considère que le nombre de 560 000 d'ici
            2034 est tout à fait insuffisant. Il s'agit de moins de la moitié de
            la recommandation du
            <span
              ><a href="https://habitationetclimat.ca/" target="_blank"
                >groupe de travail pour l'Habitation et le Climat
              </a></span
            >, avec un échéancier plus long. La cible de logements àbut non
            lucratif apparaît quant à elle en dessous de ce qui serait requis
            pour rééquilibrer les forces du marché.
          </p>

          <p class="para p3">
            De plus, bien que Vivre en Ville apprécie que le gouvernement
            reconnaisse l'importance de mobiliser les outils d'urbanisme pour
            faire face à la crise de l'habitation, l'organisation note que la
            conformité de la planification régionale avec l'objectif national de
            mise en chantier n'est pas exigée.
          </p>

          <p class="para p4">
            Le gouvernement devra certes accompagner les MRC dans l'évaluation
            des besoins, mais aussi exiger que la planification territoriale
            s'inscrive en cohérence avec ceux-ci (et avec la cible nationale),
            sans quoi il demeurera possible de planifier une sous-production de
            logements. Il faudra reconnaître, le plus rapidement possible, que
            le gouvernement national a une responsabilité de leadership en
            habitation qu'il ne peut pas déléguer. Tout le monde qui habite au
            Québec habite au Québec, et c'est donc l'échelle conséquente pour
            uniformiser et dynamiser le contexte dans lequel la construction
            résidentielle a lieu.
          </p>

          <p class="para p5">
            « Nous avons enfin une cible de mise en chantier, voilà un pas
            important qui deviendra assurément un précédent. Bravo! Reste que
            beaucoup de questions demeurent en suspens. La cible est
            insuffisante et les moyens pour l'atteindre ne semblent pas être au
            rendez-vous. On s'en remet beaucoup aux municipalités, qui ont
            certainement un rôle à jouer, mais des moyens fiscaux et financiers
            très limités et d'importants défis, en matière d'infrastructures
            notamment. Les efforts risquent d'être lacunaires et disparates
            d'une région à l'autre »
            <span
              >déclare Christian Savard, directeur général de Vivre en
              Ville</span
            >.
          </p>

          <div class="next__chapter">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>

          <h3 class="para para__subtitle">Une stratégie multisectorielle</h3>

          <p class="para p6">
            Vivre en Ville tient néanmoins à souligner qu'un des mérites de la
            Stratégie est qu'il s'agit d'un véritable plan d'action
            interministériel, qui dépasse nettement le domaine d'intervention de
            la Société d'Habitation du Québec (SHQ).
          </p>

          <p class="para p7">
            Cette reconnaissance nouvelle de la part du gouvernement est
            prometteuse et correspond à une des principales prémisses de «
            <span
              ><a
                href="https://carrefour.vivreenville.org/publication/portes-ouvertes?_gl=1*14lyan0*_gcl_au*MTM4MDIzNjY5OS4xNzI1MzAyNjYz*_ga*MjMwNDkzMDg3LjE3MjUwNDU2MDc.*_ga_BJN4N9M05K*MTcyOTcxNjI5Ny4yOC4wLjE3Mjk3MTYyOTcuNjAuMC4w*_ga_49PQ1RHZ3K*MTcyOTcxNjI5Ny40LjAuMTcyOTcxNjI5Ny4wLjAuMA.."
              >
                Portes ouvertes: vers une sortie de crise en habitation
              </a></span
            >
            ». Vivre en Ville constate certaines actions liées à chacun des
            quatre grands chantiers à mener simultanément en habitation:
          </p>

          <ul class="para news__list">
            <li class="list__item">
              <p>
                Construire plus que la demande, près des emplois, des transports
                et des services
              </p>
            </li>

            <li class="list__item">
              <p>Protéger la population des excès du marché immobilier</p>
            </li>

            <li class="list__item">
              <p>Construire une abondance de logements à but non lucratif</p>
            </li>

            <li class="list__item">
              <p>Réapprendre à construire efficacement et durablement</p>
            </li>
          </ul>

          <p class="para p8">
            À titre d'exemple, l'intention de miser sur la modélisation
            numérique pour accroître la productivité est une mesure porteuse
            dont le potentiel gagnera à être déployé au cours des prochaines
            années.
          </p>

          <p class="para p9">
            Néanmoins, Vivre en Ville considère que trop peu est fait pour
            s'attaquer au problème de la spéculation. En effet, les mesures de
            préservation du parc existant seront insuffisantes sans un registre
            des loyers et d'autres mesures pour faire appliquer les lois
            exceptionnelles que nous avons déjà au Québec - celles qui ont
            historiquement protégé le Québec des crises dévastatrices qui font
            des ravages dans le Canada anglais, et qui doivent servir de fer de
            lance pour la préservation du parc existant.
          </p>

          <div class="next__chapter">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>

          <h3 class="para para__subtitle">À propos de Vivre en Ville</h3>

          <p class="para p10">
            Organisation d’intérêt public, Vivre en Ville contribue, partout au
            Québec, au développement de collectivités viables, œuvrant tant à
            l’échelle du bâtiment qu’à celles de la rue, du quartier et de
            l’agglomération. Par ses actions, Vivre en Ville stimule
            l’innovation et accompagne les décideurs, les professionnels et les
            citoyens dans le développement de milieux de vie de qualité,
            prospères et favorables au bien-être de chacun, dans la recherche de
            l’intérêt collectif et le respect de la capacité des écosystèmes.
          </p>

          <div class="next__chapter">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
          </div>

          <div class="para renseignement">
            <h3 class="para__subtitle">Renseignement</h3>
            <p class="rens__nom">Thalie Labonté</p>
            <p class="rens__poste">
              Coordonnatrice - Relations stratégiques et communication
            </p>
            <p class="rens__info">
              514-893-7998 |
              <a href="mailto:thalie.labonte@vivreenville.org"
                >thalie.labonte@vivreenville.org</a
              >
            </p>
          </div>
        </div>
        <div class="article__btn">
          <div class="article__prec">
            <a class="" href="">
              <button class="prec__btn">Précédent</button>
            </a>
          </div>

          <div class="article__prec">
            <a class="" href="">
              <button class="prec__btn">Suivant</button>
            </a>
          </div>
        </div>
      </section>

      <section class="nouvelles">
        <h2 class="nouvelles__titre">Articles similaire</h2>
        <div class="grid__articles">
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
	
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>