<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>


<?php
echo'<pre>';
print_r($_SESSION);
echo'</pre>';
?>

<section class="taille_1170 bloc_gestions">

    <?php // Formulaire pour ajouter un article ?>
    <h1>Ajouter un article</h1>

    <form action="administration.php?action=createArticlesAdmin" method="post" enctype="multipart/form-data">

        <div class="informationsusers_input">
                
            <input type="text" id="title" name="title" placeholder="Titre">
                    
            <input type="text" id="description_articles" name="description_articles" placeholder="100 caractères max">

            <textarea id="content" name="content" placeholder="Contenu" style="height:100px; width:300px"></textarea>


            <div class="style_btn_informationsusers">
                <button type="submit" class="btn_modifier_informationsusers">Ajouter</button>
            </div>

        </div>
    </form>    

    <?php // Articles en ligne ?>
    <h2>Articles en ligne</h2>

    <div class="bloc_articles_actusadmin">

        <?php foreach($allArticlesAdmin as $allArticleAdmin){ ?>

            <div class="card_actusadmin">

                <img src="<?= $allArticleAdmin['image_articles'] ?>" alt="<?= $allArticleAdmin['titre_img_articles'] ?>">
                    
                <div class="card_actusadmin_texte">

                    <p><span>Ecrit par :</span> <?= $allArticleAdmin['firstname'] ?></p>
                    <p><span>Titre :</span> <?= $allArticleAdmin['title'] ?></p>
                    <p><span>Description courte :</span> <?= $allArticleAdmin['description_articles'] ?></p>
                    <p><span>Contenu :</span> <?= $allArticleAdmin['content'] ?></p>

                </div>


                <div class="btn_gestions_actualites">
                    <div class="btn_modifier_informationsusers"><a href="administration.php?action=articleAdminEdition&id=<?= $allArticleAdmin['id'] ?>">Editer l'article</a></div>

                    <div class="btn_modifier_images"><a href="administration.php?action=articleImgAdminEdition&id=<?= $allArticleAdmin['id'] ?>">Editer l'image</a></div>

                    <div class="btn_supprimer_informationsusers"><a href="administration.php?action=deletArticleAdmin&id=<?= $allArticleAdmin['id'] ?>">Supprimer</a></div>
                </div>

            </div>
            

        <?php } ?>

    </div>

</section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>