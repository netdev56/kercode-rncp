<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php // SEO - Meta: Description ?>
    <?php $seoDescription = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($seoDescription, 'legite') == true){
            echo '<meta Description="Louer un gite en Bretagne, notre gîte est situé à Pluneret proche de Quiberon, Vannes, Sainte Anne d\'Auray, Carnac dans le Morbihan">';
        
        }elseif(strpos($seoDescription, 'tarifs') == true){
            echo '<meta name="Description" content="Gîte La Cave est un gite à louer sur Pluneret dans le Morbihan en Bretagne. Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer">';

        }elseif(strpos($seoDescription, 'actualites') == true){
            echo '<meta name="Description" content="Venez louer votre gite proche de Carnac, Quiberon, Vannes, Trinité sur mer, Vannes, Sarzeau. Location au calme proche de la mer pour se détendre">';

        }elseif(strpos($seoDescription, 'livredor') == true){
            echo '<meta name="Description" content="Gîte La Cave - Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer">';

        }elseif(strpos($seoDescription, 'contactezNous') == true){
            echo '<meta name="Description" content="Gîte à louer à Pluneret dans le Morbihan proche de Carnac, Auray, Quiberon, la Trinité sur Mer. Gîte La Cave - 43 rue de Lescheby 56400 Pluneret">';
        
        }elseif($seoDescription){
            echo '<meta name="Description" content="Gîte La Cave est un gite à louer sur Pluneret dans le Morbihan en Bretagne. Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer">';
        }

    ?>
    
    <?php // SEO - Meta: indexation ?>
    <?php $seoRobots = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($seoRobots, 'erreurForm') == true){
            echo '<meta name="robots" content="noindex,nofollow">';
        
        }elseif(strpos($seoRobots, 'mentionsLegales') == true){
            echo '<meta name="robots" content="noindex,nofollow">';
        
        }elseif(strpos($seoRobots, 'p404') == true){
            echo '<meta name="robots" content="noindex,nofollow">';
        
        }elseif(strpos($seoRobots, 'cookie') == true){
            echo '<meta name="robots" content="noindex,nofollow">';
        
        }elseif($seoRobots){
            echo '<meta name="robots" content="index,follow">';
        }

    ?>

    <?php // Feuille de style CSS ?>
    <link rel="stylesheet" href="app/public/front/css/style.css">

    <?php // SEO - Meta: Title ?>
    <?php $seoDescription = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($seoDescription, 'legite') == true){
            echo '<title>Gîte La Cave - Location de vacance à Pluneret proche de Quiberon, Auray</title>';
        
        }elseif(strpos($seoDescription, 'tarifs') == true){
            echo '<title>Gîte La Cave - Location Pluneret dans le Morbihan en Bretagne</title>';

        }elseif(strpos($seoDescription, 'actualites') == true){
            echo '<title>Gîte La Cave - Location gite proche de Quiberon, Carnac, Vannes, Auray</title>';

        }elseif(strpos($seoDescription, 'livredor') == true){
            echo '<title>Gîte La Cave - Location gite proche de Vannes, Auray en Bretagne</title>';

        }elseif(strpos($seoDescription, 'contactezNous') == true){
            echo '<title>Gîte La Cave - Location Pluneret dans le Morbihan en Bretagne</title>';
        
        }elseif($seoDescription){
            echo '<title>Gîte La Cave - Location de gite à Pluneret dans le Morbihan en Bretagne</title>';
        }

    ?>


</head>
<body>

    <header>
        <a href="./" class="logo_gite">La Cave</a>

        <nav class="menu_nav">
            <div class="btn_menu">
                <i class="close-btn"><img src="app/public/front/images/menu/fermer_nav.svg" alt="Fermer"></i>
            </div>
            
                <a href="/">Accueil</a>
                <a href="index.php?action=legite">Le gîte</a>
                <a href="index.php?action=tarifs">Tarifs</a>
                <a href="index.php?action=actualites">Actualités</a>
                <a href="index.php?action=livredor">Livre d'or</a>
                <a href="index.php?action=contactezNous">Contactez-Nous !</a>

        </nav>

            <div class="btn_menu">
                <i class="menu-btn"><img src="app/public/front/images/menu/bars-menu.svg" alt="Menu"></i>
            </div>
            
        
    </header>

    <main class="footer_bas">
        <?php // Injection du contenu ?>
        <?= $content ?>
    </main>

    <footer>
        <div class="coordonnees-aligne">
            <p>Location Gîte La Cave dans le Morbihan en Bretagne </p><p> | </p><p> 43 rue de Lescheby 56400 Pluneret </p><p> | </p><p> 02 97 56 40 75 </p><p> | </p><p> <a href="index.php?action=planDuSite">Plan du site</a> </p><p> | </p><p> <a href="index.php?action=mentionsLegales">Mentions Légales</a></p>
        </div>
        <div class="btn-seconnecter">
            <a href="administration.php?action=connexionAdministration" target="_blank" rel="noopener noreferrer">Se connecter</a>
        </div>
    </footer>

    
<?php // Bannière cookie ?>
<?php if(!isset($_COOKIE['accepteCookie'])){ ?>

<div class="banner-cookie">
    <div class="text-banner">
        <p>En poursuivant votre navigation, vous acceptez l'utilisation des cookies. <a href="index.php?action=cookie">En savoir plus</a></p>
    </div>
    <div class="button-banner">
        <a href="index.php?action=accepteCookie">J'accepte</a>
    </div>
</div>

<?php } ?>

<?php // Script JS pour le menu ?>
<script type="text/javascript" src="app/public/front/js/menuFront.js"></script>

</body>
</html>