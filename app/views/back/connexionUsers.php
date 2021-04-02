<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <?php // Feuille de style CSS ?>
    <link rel="stylesheet" href="app/public/back/css/style.css">

    <title>Gîte La Cave - Connexion</title>
</head>

<body class="body_connexion">

<section class="bloc_connexion">
    <h1>Se connecter</h1>

        <form action="administration.php?action=connexionUser" method="POST">
            <div class="connexion_input">
                <input type="text" name="mail" id="mail" placeholder="Email">
                <input type="password" name="pass" id="pass" placeholder="Mot de passe">
            </div>
            
            <div class="connexion_envoyer">
                <button type="submit">Se connecter</button>
            </div>

        </form>
    

    <p class="inscription_connexion"><a href="administration.php?action=registrationFormUser">Créer un compte</a></p>

</section>

    
</body>
</html>