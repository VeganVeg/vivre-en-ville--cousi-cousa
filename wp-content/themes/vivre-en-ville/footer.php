<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
      <div class="grid__footer">
        <div class="footer__contact">
          <a class="contact phone" href="tel:514-394-1125"
            >Téléphone: 514-394-1125</a
          >
          <a class="contact email" href="mailto:info@vivreenville.org"
            >Adresse courriel: info@vivreenville.org</a
          >
          <a
            class="contact adress"
            href="https://maps.app.goo.gl/AJ6X1yxj49Sfpx1Z6"
            >50, rue Ste-Catherine Ouest, bur. 480 Montréal (Québec) H2X 3V4</a
          >
        </div>

        <div class="footer__logo__centered">
          <a href="index.html">
            <img src="sources/logo/logo.png" width="90" height="auto" alt="" />
          </a>
          <div class="footer-title">
            VIVRE EN VILLE<br /><span class="footer-subtitle">
              La voie des collectivités viables</span
            >
          </div>
        </div>

        <div class="footer__btn">
          <div class="footer__logo">
            <a href="index.html">
              <img
                src="sources/logo/logo.png"
                width="75"
                height="auto"
                alt=""
              />
            </a>
            <div class="footer-title">
              VIVRE EN VILLE<br /><span class="footer-subtitle">
                La voie des collectivités viables</span
              >
            </div>
          </div>

          <div class="footer__don">
            <a
              class="link__button"
              href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
              target="_blank"
              ><button class="don">Faire un don</button></a
            >
          </div>
          <div class="footer__lien">
            <a href="https://www.facebook.com/vivreenville" class="bloc">
              <img src="sources/icons/facebook.png" alt="" />
            </a>
            <a
              href="https://www.linkedin.com/company/vivre-en-ville/"
              class="bloc"
            >
              <img src="sources/icons/linkedin.png" alt="" />
            </a>
            <a
              href="https://www.instagram.com/reduirenotreempreinte"
              class="bloc"
            >
              <img src="sources/icons/instagram.png" alt="" />
            </a>
            <a href="https://x.com/VivreenVille" class="bloc">
              <img src="sources/icons/x.png" alt="" />
            </a>
            <a href="https://www.youtube.com/@vivreenville3822" class="bloc">
              <img src="sources/icons/youtube.png" alt="" />
            </a>
          </div>
        </div>
      </div>
      <div class="credit">©2024, Vivre en Ville, Cousi-Cousa</div>
    </footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
