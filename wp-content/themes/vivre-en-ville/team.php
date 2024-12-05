<?php 
/**
 * 	Template Name: Équipe
 * 	Template Post Type: page, post, article, membre
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post();
?>

		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
		<?php endif; ?>


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

      <section class="team">
        <h1>Notre Équipe</h1>
        <div class="team_profile">
          <div class="alexandre-turgeon" id="first">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id01').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id01').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Alexandre Turgeon est directeur général du Conseil
                      régional de l’environnement – Capitale Nationale et
                      président exécutif du Centre culture et environnement
                      Frédéric Back. Il cumule plus de vingt années d’expérience
                      en urbanisme et environnement, notamment à titre de
                      communicateur sur le thème des collectivités viables et de
                      gestionnaire de projet. À ce titre, il intervient comme
                      conférencier senior pour Vivre en Ville. Il a orchestré la
                      mise en œuvre de projets de démonstration comme la
                      coopérative d’habitation Vivre en Ville et le bâtiment
                      écologique du Centre Culture et Environnement Frédéric
                      Back à Québec.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Alexandre Turgeon - Fondateur et président exécutif</h3>

            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/alexandr-turgeon.jpg" />
          </div>
          <hr />
          <div class="christian-savard" id="second">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id02').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id02" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id02').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Christian Savard est directeur général de Vivre en Ville
                      depuis 2006. Son travail et son implication dans le débat
                      public l’ont amené à diriger la rédaction de nombreuses
                      publications (livres, mémoires, études et articles) sur
                      les enjeux de mobilité durable et d’urbanisme. Il est
                      fréquemment sollicité par différentes instances des
                      secteurs privé, public et associatif sur nombre d’enjeux
                      dans le cadre de comités de réflexion ou de l'élaboration
                      de politiques et programmes. Titulaire d’une maîtrise en
                      aménagement du territoire et développement régional, il
                      s’est spécialisé dans les domaines des transports, de
                      l’urbanisme et du design urbain, tout en développant une
                      expertise dans la gestion d’organisations non
                      gouvernementales.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Christian Savard - Directeur général</h3>
            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/christian-savard.jpg" />
          </div>
          <hr />
          <div class="jeanne-robin" id="first">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id03').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id03" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id03').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Titulaire d'une maîtrise en aménagement du territoire de
                      l'Université Laval, Jeanne Robin a rejoint Vivre en Ville
                      en 2008 et en est aujourd'hui directrice principale. Elle
                      est spécialiste en développement urbain durable, et se
                      passionne notamment pour l’action climatique ainsi que les
                      environnements favorables à la santé et à l’équité.
                      Conférencière et formatrice, elle a mené plusieurs projets
                      de sensibilisation et coordonné la rédaction de nombreux
                      guides de bonnes pratiques. Elle possède plus de 20 ans
                      d’expérience en recherche, rédaction, communication,
                      sensibilisation et gestion de projets.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Jeanne Robin - Directrice principale</h3>
            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/jeanne-robin.jpg" />
          </div>
          <hr />
          <div class="marie-helene-coll" id="second">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id04').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id04" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id04').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Titulaire d'un baccalauréat en Études internationales et
                      d'une maîtrise en géographie appliquée de l'Université
                      Laval, Marie-Hélène Coll a oeuvré pendant neuf ans au sein
                      de Mobilli-T, le Centre de gestion des déplacements du
                      Québec métropolitain, dont trois à titre de directrice
                      générale. Elle a également été secrétaire de l'Association
                      des Centres de gestion des déplacements du Québec.
                      Passionnée par les enjeux de mobilité et de développement
                      urbain durables, elle a rejoint Vivre en Ville en avril
                      2019 au poste de directrice générale adjointe et travaille
                      notamment sur la gestion administrative de l'organisme et
                      le développement de projets.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Marie-Hélène Coll - Directrice générale adjointe</h3>
            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/marie-helene-coll.jpg" />
          </div>
          <hr />
          <div class="adam-mongrain" id="first">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id05').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id05" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id05').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Adam Mongrain est Directeur - Habitation à Vivre en Ville.
                      En tant qu'expert et gestionnaire, il a contribué, entre
                      autres, au Groupe de Travail Habitation et Climat; au
                      Laboratoire de solution PORTES pour l'abordabilité et la
                      durabilité en habitation; et au document PORTES OUVERTES -
                      Pour une sortie de crise durable en habitation. Adam est
                      entouré d'une équipe d'expert·es provenant des milieux de
                      la recherche, de la promotion immobilière privée et OBNL,
                      de l'urbanisme et de l'aménagement du territoire, et du
                      mouvement coopératif. Avant de se joindre à Vivre en
                      Ville, Adam a cumulé plus de 10 ans d'expérience en
                      développement logiciel et en gestion de projets. Il
                      travaille aussi à l'institutionnalisation du registre des
                      loyers depuis 2018.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Adam Mongrain - Directeur - Habitation</h3>
            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/adam-mongrain.jpg" />
          </div>
          <hr />
          <div class="capucine-berdah" id="second">
            <div class="w3-container">
              <button
                onclick="document.getElementById('id06').style.display='block'"
                class="w3-button"
              >
                En savoir Plus
              </button>

              <div id="id06" class="w3-modal">
                <div class="w3-modal-content w3-animate-zoom">
                  <div class="w3-container">
                    <span
                      onclick="document.getElementById('id06').style.display='none'"
                      class="w3-button w3-display-topright"
                      id="button-x"
                      >&times;</span
                    >
                    <p>
                      Titulaire d’une maîtrise en science politique, Capucine a
                      commencé en politique active, en tant qu’attachée
                      politique, avant de devenir responsable des communications
                      pour un organisme communautaire. Très motivée à participer
                      à la construction d'un avenir durable, elle rejoint
                      l’équipe des communications de Vivre en Ville en 2021.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h3>Capucine Berdah - Directrice - Communications</h3>
            <img src="<?php bloginfo('template_url'); ?>/sources/img/profile/capucine.jpg" />
          </div>
        </div>
      </section>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>