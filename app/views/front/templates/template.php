<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php // SEO - Meta: Description ?>
    <meta name="Description" content="<?= $meta_description ?>" />
    
    <?php // SEO - Meta: indexation ?>
    <meta name="robots" content="<?= $meta_robots ?>" />

    <?php // Feuille de style CSS ?>
    <link rel="stylesheet" href="app/public/front/css/style.css">

    <?php // Favicon ?>
    <link rel="icon" href="app/public/front/images/icones/favicon.ico" />

    <?php // SEO - Meta: Title ?>
    <title><?= $meta_title ?></title>

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
            <p>Location Gîte La Cave dans le Morbihan en Bretagne </p>
            <p> | </p>
            <p> 43 rue de Lescheby 56400 Pluneret </p>
            <p> | </p>
            <p> 02 97 56 40 75 </p>
            <p> | </p>
            <p> <a href="index.php?action=planDuSite">Plan du site</a> </p>
            <p> | </p><p> <a href="index.php?action=mentionsLegales">Mentions Légales</a></p>
        </div>
        <div class="btn-seconnecter">
            <a href="administration.php?action=connexionAdministration" rel="noopener noreferrer">Se connecter</a>

        </div>
    </footer>
    

<?php // Script JS pour le menu ?>
<script src="app/public/front/js/menuFront.js"></script>

</body>
</html>