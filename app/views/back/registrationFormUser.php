<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Formulaire d'inscription au gîte La Cave">
    <meta name="robots" content="noindex, nofollow">

    <?php // Feuille de style CSS ?>
    <link rel="stylesheet" href="app/public/back/css/style.css">

    <title>Gîte La Cave - Inscription</title>
</head>

<body class="body_connexion">

    <section class="bloc_connexion">
        <h1>Inscription</h1>

            <form action="administration.php?action=createUsers" method="POST">
            
                <div class="connexion_input">
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo">
                    <input type="text" name="lastname" id="lastname" placeholder="Nom">
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom">
                    <input type="text" name="mail" id="mail" placeholder="Email">
                    <input type="password" name="pass" id="pass" placeholder="Mot de passe">
                </div>
            
                <div class="connexion_envoyer">
                    <button type="submit">S'inscrire</button>
                </div>

            </form>

            <p class="inscription_connexion"><a href="administration.php?action=connexionAdministration">Revenir à la page de connexion</a></p>

    </section>
   
</body>
</html>