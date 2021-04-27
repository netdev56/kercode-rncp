<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

        <section class="taille_1170 bloc_titre_general">
            <h1>Livre d'or</h1>

            <p>Merci à tous ceux qui ont gentillement pris quelques minutes pendant leurs vacances,</p>
            <p>pour nous laisser un petit mot sur leurs impressions, émotions et sentiments.</p>
            <p class="marge_livredor">Au plaisir de vous accueillir à nouveau dans notre belle région !</p>
            
            <div class="taille_1170 bloc_commentaires_livre">

                <?php foreach($allGuestbookComments as $allGuestbook){ ?>

                    <div class="commentaires_livre">
                            <p class="post_livre">Posté par <span><?=$allGuestbook['pseudo']?></span> le <?=$allGuestbook['datePublication'] ?></p>
                            <p><?= nl2br($allGuestbook['comments']) ?></p>
                    </div>

                <?php } ?>

            </div>
        </section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>