<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_gestions">

    <?php $infosUserAdmin = $infosUsersAdmin->fetch() ?>

    <h1>Vos informations personnelles</h1>

    <form action="administration.php?action=editInformationsUsers&id=<?= $infosUserAdmin['id'] ?>" method="POST">
        <table class="informationsusers_input">
            <tr>
                <td><label for="pseudo">Votre pseudo :</label></td>
                <td><input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" value="<?= $infosUserAdmin['pseudo'] ?>"></td>
            </tr>

            <tr>
                <td><label for="lastname">Votre nom :</label></td>
                <td><input type="text" name="lastname" id="lastname" placeholder="Votre nom" value="<?= $infosUserAdmin['lastname'] ?>"></td>
            </tr>

            <tr>
                <td><label for="firstname">Votre prénom :</label></td>
                <td><input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?= $infosUserAdmin['firstname'] ?>"></td>
            </tr>

            <tr>
                <td><label for="email">Votre email :</label></td>
                <td><input type="email" name="email" id="email" placeholder="Votre adresse email" value="<?= $infosUserAdmin['email'] ?>"></td>
            </tr>

            <tr>
                <td><label>Votre mot de passe :</label></td>
                <td class="informationsusers_mdp"><a href="administration.php?action=informationsUsersMdp&id=<?= $infosUserAdmin['id'] ?>" title="Modifier votre mot de passe">Cliquez ici</a></td>
            </tr>

            <tr>
                <td class="informationsusers_date"><label>Date d'inscription : </label></td>
                <td class="informationsusers_date"><?= $infosUserAdmin['dateInscription'] ?></td>
            </tr>

            <tr>
                <td>
                    <div class="style_btn_informationsusers">
                        <button type="submit" class="btn_modifier_informationsusers">Enregistrer</button>
                    </div>
                </td>
                <td>
                    <div class="style_btn_informationsusers btn_supprimer_informationsusers"><a href="administration.php?action=deletInfosUser&id=<?= $infosUserAdmin['id'] ?>&id_user=<?= $_SESSION['id'] ?>">Supprimer</a>
                    </div>
                </td>
            </tr>
        </table>
    </form>

</section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>