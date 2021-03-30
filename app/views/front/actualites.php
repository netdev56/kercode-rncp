<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

    <section class="taille_1170 bloc_titre_general">
        <h1>Retrouvez toute l'actualité !</h1>
    </section>
    
    <article class="taille_1170 bloc_articles_actus">

        <?php foreach($allArticles as $allArticle){ ?>

            <div class="card_actus">

                <img src="<?= $allArticle['image_articles'] ?>" alt="<?= $allArticle['titre_img_articles'] ?>">

                <div class="card_actus_texte">
                    <h2><?= $allArticle['title'] ?></h2>
                    <p><?= nl2br($allArticle['description_articles']) ?>...</p>
                </div>

                <a href="index.php?action=actualitesSingle&id=<?= $allArticle['id'] ?>" title="<?= $allArticle['title'] ?>"><button class="card_actus_btn">+ d'infos</button></a>
            </div>

        <?php } ?>

    </article>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>