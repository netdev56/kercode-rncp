<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<?php $managementEditUser = $allUserMdp->fetch() ?>

<section class="taille_1170 bloc_gestions">

    <h1>Informations de l'utilisateur</h1>

    <form action="administration.php?action=editManagementUserMdp&id=<?= $managementEditUser['id'] ?>" method="POST">

        <div class="informationsusers_input">
            <label for="pass">Mot de passe :</label>
            <input type="password" name="pass" id="pass" placeholder="*********">
        </div>

        <div class="style_btn_informationsusers">
            <button type="submit" class="btn_modifier_informationsusers">Enregistrer</button>
        </div>

    </form>

</section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>