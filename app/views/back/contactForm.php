<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>


<section class="taille_1170 bloc_gestions">

    <h1>Vos messages</h1>

    <?php foreach($allMessaging as $allMessage){ ?>

        <?php // Bloc des coordonnées ?>
        <div class="bloc_messagerie_coordonnes">
            <div class="style_messagerie_coordonnes">
                <label>Nom : </label> <?= htmlspecialchars($allMessage['lastname_contactform']) ?>
            </div>

            <div class="style_messagerie_coordonnes">
                <label>Email : </label> <?= htmlspecialchars($allMessage['email_contactform']) ?>
            </div>

            <div class="style_messagerie_coordonnes">
                <label>Téléphone : </label> <?= htmlspecialchars($allMessage['telephone_contactform']) ?>
            </div>

        </div>

        <?php // Bloc du message + validation RGPD ?>
        <div class="bloc_messagerie_message">

            <div>
                <label>Message : </label>
                <?= htmlspecialchars($allMessage['message_contactform']) ?>
            </div>

            <div class="rgpd_supprimer_messagerie">
                <label>RGPD : </label> <?= htmlspecialchars($allMessage['rgpd_contactform']) ?>
            </div>

            <div class="btn_supprimer_messagerie">
                <div class="button_messagerie"><a href="administration.php?action=deletContactMessaging&id=<?= htmlspecialchars($allMessage['id_contactform']) ?>" class="supprimer_messagerie">Supprimer</a></div>
            </div>
        </div>

    <?php } ?>

</section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>