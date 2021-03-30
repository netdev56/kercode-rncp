<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>


<section class="taille_1170">

    <?php foreach($allMessaging as $allMessage){ ?>


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
        <div class="bloc_messagerie_message">

            <div>
                <label>Message : </label>
                <?= htmlspecialchars($allMessage['message_contactform']) ?>
            </div>

            <div class="rgpd_supprimer_messagerie">
                <label>RGPD : </label> <?= htmlspecialchars($allMessage['rgpd_contactform']) ?>
            </div>

            <div class="btn_supprimer_messagerie">
                <button><a href="administration.php?action=deletContactMessaging&id=<?= htmlspecialchars($allMessage['id_contactform']) ?>" class="supprimer_messagerie">Supprimer</a></button>
            </div>
        </div>

        

    <?php } ?>

</section>


<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>