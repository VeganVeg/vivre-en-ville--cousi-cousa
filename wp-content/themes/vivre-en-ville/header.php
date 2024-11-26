<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!--font start-->
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!--font end-->

    <!--bootstrap start-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!--bootstrap end-->

    <!--swiper start-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <!--swiper end-->
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />


<title>
	<?php bloginfo('name'); // Affiche le nom du blog ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // si nous sommes sur la page d'accueil, affichez la description à partir des paramètres du site - sinon, affichez le titre du post ou de la page. ?>
</title>
<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
		

	<nav class="navbar navbar-dark navbar-expand-xxl">


		<div class="container-fluid">
          <!-- BRAND -->
          <a
            class="navbar-brand d-flex navbar-brand-mobile d-block d-xxl-none align-items-center"
            href="index.html"
            ><img src="<?php bloginfo('template_url'); ?>/sources/logo/logo.png" width="60" height="auto" alt="" />
          </a>

          <!--hamburger button-->
          <button
            class="navbar-toggler border-0 ms-auto"
            data-bs-toggle="collapse"
            data-bs-target="#mainNav"
            aria-controls="mainNav"
            aria-expanded="false"
            aria-label="Affichage/masquage de la navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!--navigation-->
          <div id="mainNav" class="collapse navbar-collapse">
            <ul class="navbar-nav mx-auto align-items-center">

            <?php 
			// Affiche un menu si dans le tableau de bord un menu a été défini dans cet emplacement
			wp_nav_menu( array( 'theme_location' => 'main-menu' ) );
		?>

              <li class="nav-item">
                <a href="news-hub.html" class="nav-link">Nouvelles</a>
              </li>
              <li class="nav-item">
                <a href="services-hub.html" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="about.html" class="nav-link">À propos</a>
              </li>
              
              <li class="nav-item">
                <a href="contact-us.html" class="nav-link">Nous joindre</a>
              </li>

              <li class="nav-item">
                <a
                  class="navbar-brand d-flex mx-auto align-items-center d-none d-xxl-flex"
                  href="index.html"
                  ><img
                    src="<?php bloginfo('template_url'); ?>/sources/logo/logo.png"
                    width="90"
                    height="auto"
                    alt=""
                  />
                  <div class="title">
                    VIVRE EN VILLE<br /><span class="subtitle"
                      >La voie des collectivités viables</span
                    >
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a href="team.html" class="nav-link">Équipe</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">FAQ</a>
              </li>
              <li class="nav-item nav-item-don">
                <a
                  href="https://activites.vivreenville.org/fr/dons/donate/faire-un-don/2946/"
                  target="_blank"
                  class="nav-link nav-link-don"
                  >Faire un don</a
                >
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">EN</a>
              </li>
            </ul>
          </div>
        </div>
	</nav>

	<?php 
		// Affiche la description de site se trouvant dans "General Settings" dans l'admin WordPress
		bloginfo( 'description' ); 
	?>
</header>

<main><!-- Débute le contenu principal de notre site -->
