<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_titre_general">
    <h1 class="marge_h1">Retrouvez toute l'actualité !</h1>
    
    <article class="bloc_articles_actus">

        <?php foreach($allArticles as $allArticle){ ?>

            <div class="card_actus">

                <img src="<?= $allArticle['image_articles'] ?>" alt="<?= $allArticle['titre_img_articles'] ?>">

                <div class="card_actus_texte">
                    <h2><?= $allArticle['title'] ?></h2>
                    <p><?= nl2br($allArticle['description_articles']) ?>...</p>
                </div>

                <div class="card_actus_btn">
                    <a href="index.php?action=actualitesSingle&id=<?= $allArticle['id'] ?>" title="<?= $allArticle['title'] ?>">+ d'infos</a>
                </div>

            </div>

        <?php } ?>

    </article>

    <?php // Pagination ?>
    <div class="btn_pagination_actualites">
        <?php for ($i = 1; $i <= $numeroDePage; $i++){
            echo "<p class='btn-pagination'><a href=\"index.php?action=actualites&page=$i\">$i </a></p>";
        } ?>
    </div>
    
</section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>