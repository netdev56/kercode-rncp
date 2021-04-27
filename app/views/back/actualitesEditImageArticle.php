<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

        <?php $articleImgAdmin = $allArticlesImgAdmin->fetch() ?>

        <section class="taille_1170 bloc_gestions">

            <h1>Modifier l'image</h1>

            <form action="administration.php?action=updateImageArticle&id=<?= $articleImgAdmin['id'] ?>" method="post" enctype="multipart/form-data">
            
                <table class="informationsusers_input style_input_editarticle">
                    <tr>
                        <td><label for="titre_img_articles">Titre seo de l'image : </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="titre_img_articles" name="titre_img_articles" value="<?= $articleImgAdmin['titre_img_articles'] ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="fileToUpload">Envoi du fichier : </label></td>
                    </tr>
                    <tr>
                        <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="style_btn_informationsusers">
                                <button type="submit" name="submit" id="upload" class="btn_modifier_informationsusers">Enregistrer</button>
                            </div>
                        </td>
                    </tr>
                </table>

            </form>

        </section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>