<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>


<?php $managementEditUser = $managementEditionUser->fetch() ?>

<section class="taille_1170 bloc_gestions">

    <h1>Informations de l'utilisateur</h1>

        <form action="administration.php?action=editManagementUser&id=<?= $managementEditUser['id'] ?>" method="POST">
            <table class="informationsusers_input">
                <tr>
                    <td><label for="pseudo">Pseudo :</label></td>
                    <td><input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" value="<?= $managementEditUser['pseudo'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="lastname">Nom :</label></td>
                    <td><input type="text" name="lastname" id="lastname" placeholder="Votre nom" value="<?= $managementEditUser['lastname'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="firstname">Prénom :</label></td>
                    <td><input type="text" name="firstname" id="firstname" placeholder="Votre prénom" value="<?= $managementEditUser['firstname'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Votre adresse email" value="<?= $managementEditUser['email'] ?>"></td>
                </tr>

                <tr>
                    <td><label for="password">Mot de passe :</label></td>
                    <td><input type="password" name="pass" id="pass" placeholder="*********"></td>
                </tr>

                <tr>
                    <td><label>Changer le role :</label></td>
                    <td>
                    <?php if($managementEditUser['roleusers'] = 'user'){ ?>
                    <input type="radio" id="roleusers" name="roleusers" value="admin">
                        <label for="roleusers">Administrateur</label>

                        <?php }else{ ?>

                        <input type="radio" id="roleusers" name="roleusers" value="user">
                        <label for="roleusers">Utilisateur</label>
                        
                        <?php } ?>

                        </td>
                </tr>

                <tr>
                    <td><label for="dateInscription">Date d'inscription : </label></td>
                    <td class="informationsusers_date"><?= $managementEditUser['dateinscription'] ?></td>
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


<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>