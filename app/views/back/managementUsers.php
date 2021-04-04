<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_gestions">

<?php // Formulaire pour ajouter un utilisateur ?>
<h1>Ajouter un utilisateur</h1>

<form action="administration.php?action=createUserManagement" method="POST">
            <table class="informationsusers_input">
                <tr>
                    <td><label for="pseudo">Pseudo :</label></td>
                    <td><input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"></td>
                </tr>

                <tr>
                    <td><label for="lastname">Nom :</label></td>
                    <td><input type="text" name="lastname" id="lastname" placeholder="Votre nom"></td>
                </tr>

                <tr>
                    <td><label for="firstname">Prénom :</label></td>
                    <td><input type="text" name="firstname" id="firstname" placeholder="Votre prénom"></td>
                </tr>

                <tr>
                    <td><label for="mail">Email :</label></td>
                    <td><input type="email" name="mail" id="mail" placeholder="Votre adresse email"></td>
                </tr>

                <tr>
                    <td><label for="pass">Mot de passe :</label></td>
                    <td><input type="password" name="pass" id="pass" placeholder="Votre mot de passe"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <div class="style_btn_informationsusers">
                            <button type="submit" class="btn_modifier_informationsusers">Ajouter</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>



<?php // Utilisateurs en ligne ?>
<h2>Tous les utilisateurs :</h2>

<div class="style_gestions">

<?php 
foreach($allUser as $allUsers){ 
    ?>


<div class="case_gestions">


<p><span>ID :</span> <?=$allUsers['id']?></p>
    <p><span>Pseudo :</span> <?=$allUsers['pseudo']?></p>
    <p><span>Nom :</span> <?=$allUsers['lastname']?></p>
    <p><span>Prénom :</span> <?=$allUsers['firstname']?></p>
    <p><span>Email :</span> <?=$allUsers['email']?></p>
    <p><span>Date d'inscription :</span> <?=$allUsers['dateUserManager']?></p>

<div class="btn_gestions">
    <div class="btn_modifier_informationsusers"><a href="administration.php?action=userEditionManagement&id=<?= $allUsers['id'] ?>">Modifier</a></div>

    <div class="btn_supprimer_informationsusers"><a href="administration.php?action=deletUserManagement&id=<?= $allUsers['id'] ?>">Supprimer</a></div>
</div>

</div>


<?php } ?>

</div>

</section>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>