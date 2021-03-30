<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>


<?php $comment = $commentEdition->fetch() ?>

<section class="taille_1170 bloc_gestions">

    <h1>Modifier le commentaire</h1>

        <form action="administration.php?action=editComments&id=<?= $comment['id'] ?>" method="POST">
            <div class="informationsusers_input">

                <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Votre commentaire" class="textarea_guestbook"><?= $comment['comments'] ?></textarea>
            
                <div class="style_btn_informationsusers">
                    <button type="submit" class="btn_modifier_informationsusers">Enregistrer</button>
                </div>
            </div>
        </form>

</section>


<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>