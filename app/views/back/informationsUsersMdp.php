<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>


<section class="taille_1170 bloc_gestions">

    <?php $infosUserMdpAdmin = $informationsUsersMdpAdmin->fetch() ?>

    <h1>Modifier votre mot de passe</h1>

    <form action="administration.php?action=editInformationsUsersMdp&id=<?= $infosUserMdpAdmin['id'] ?>" method="POST">
        <table>
            <tr>
                <td><label for="pass">Votre mot de passe :</label></td>
                <td></td>
            </tr>
            <tr>
                <td class="informationsusers_input"><input type="password" name="pass" id="pass" placeholder="*********"></td>
                <td><span id="btn_password"><img src="app/public/back/images/icones/view.png"></span></td>
            </tr>
            <tr>
                <td class="style_btn_informationsusers"><button type="submit" class="btn_modifier_informationsusers_mdp">Enregistrer</button></td>
                <td></td>
            </tr>
        </table>
    </form>

</section>

<?php // Script JS pour l'affichage du mot de passe ?>
<script src="app/public/back/js/visibleMotDePasse.js"></script>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>


<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>