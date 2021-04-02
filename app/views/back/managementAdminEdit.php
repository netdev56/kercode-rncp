<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>


<?php $managementEditAdmin = $managementEditionAdmin->fetch() ?>

<section class="taille_1170 bloc_gestions">

    <h1>Informations de l'administrateur</h1>

    <form action="administration.php?action=editManagementAdmin&id=<?= $managementEditAdmin['id'] ?>" method="POST">
            <table class="informationsusers_input">
                <tr>
                    <td><label for="pseudo">Pseudo :</label></td>
                    <td><input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" value="<?= $managementEditAdmin['pseudo'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="lastname">Nom :</label></td>
                    <td><input type="text" name="lastname" id="lastname" placeholder="Votre nom" value="<?= $managementEditAdmin['lastname'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="firstname">Prénom :</label></td>
                    <td><input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?= $managementEditAdmin['firstname'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Votre adresse email" value="<?= $managementEditAdmin['email'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="pass">Mot de passe :</label></td>
                    <td><input type="password" name="pass" id="pass" placeholder="*********"></td>
                </tr>

                <tr>
                    <td><label>Changer le role :</label></td>
                    <td><select name="roleusers">
                            <option value="admin" selected>Administrateur</option>
                            <option value="user">Utilisateur</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><label for="dateInscription">Date d'inscription : </label></td>
                    <td class="informationsusers_date" id="dateInscription" ><?= $managementEditAdmin['dateinscription'] ?></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <div class="style_btn_informationsusers">
                            <button type="submit" class="btn_modifier_informationsusers">Enregistrer</button>
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