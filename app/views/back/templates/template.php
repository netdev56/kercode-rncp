<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <?php // Feuille de style CSS ?>
    <link rel="stylesheet" href="app/public/back/css/style.css">

    <?php // Favicon ?>
    <link rel="icon" href="app/public/back/images/icones/favicon.ico" />

    <title>Tableau de bord - Administration - Gîte La Cave</title>
</head>

<body>
    <?php // Menu ?>
    <header id="navbar_haut" class="nav_haut">

        <a href="administration.php?action=dashboard&id=<?= $_SESSION['id'] ?>">Dashboard</a>

        <?php if($_SESSION['roleusers'] == 'admin'){ ?>
            <div class="dropdown-1">
                <button>Gestion des pages</button>
                <div class="content_drop-1">
                    <a href="administration.php?action=actualitesAdmin">Actualités</a>
                    <a href="administration.php?action=guestbookAdmin&id=<?= $_SESSION['id'] ?>">Livre d'or</a>
                </div>
            </div>
        <?php } ?>

        <?php if($_SESSION['roleusers'] == 'user'){ ?>
            <a href="administration.php?action=guestbook&id=<?= $_SESSION['id'] ?>">Livre d'or</a>
        <?php } ?>

        <?php if($_SESSION['roleusers'] == 'admin'){ ?>
        <div class="dropdown-2">
            <button>Gestion des utilisateurs</button>
            <div class="content_drop-2">
                <a href="administration.php?action=managementAdmin&id=<?= $_SESSION['id'] ?>">Administrateurs</a>
                <a href="administration.php?action=managementUsers&id=<?= $_SESSION['id'] ?>">Utilisateurs</a>
            </div>
        </div>
        <?php } ?>

        <a href="administration.php?action=editInfosUsers&id=<?= $_SESSION['id'] ?>">Vos informations</a>

        <?php if($_SESSION['roleusers'] == 'admin'){ ?>
            <a href="administration.php?action=contactMessaging">Messagerie</a>
        <?php } ?>

        <a href="./" target="blank">Retour au site</a>

        <a href="administration.php?action=deconnexionDashboard" class="deconnexion_style">Deconnexion</a>

        <a class="icon_menu" onclick="menuResponsive()">&equiv;</a>

    </header>

        
    <main class="back_responsive">
        <?php // Injection du contenu ?>
        <?= $content ?>
    </main>


    <footer>
    </footer>

    
<?php // Script JS pour le menu accordéon ?>
<script src="app/public/back/js/menuBack.js"></script>

</body>
</html>