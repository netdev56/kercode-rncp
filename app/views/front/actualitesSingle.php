<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<?php $allArticleSingle = $allArticlesSingle->fetch() ?>

<article>

    <div class="taille_1170 bloc_titre_actus_single">
        <h1><?= $allArticleSingle['title'] ?></h1>
        <p>Ecrit par <?= $allArticleSingle['firstname'] ?></p>
    </div>

    <div class="taille_max_actus_single">
        <div class="taille_1170 bloc_texte_actus_single">
            <div><img src="<?= $allArticleSingle['image_articles'] ?>" alt="<?= $allArticleSingle['titre_img_articles'] ?>"></div>
            <div>
                 <p><?= nl2br($allArticleSingle['content']) ?></p>
            </div>
        </div>
    </div>
    
</article>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>