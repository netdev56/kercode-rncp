<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

        <?php $articleAdmin = $editArticlesAdmin->fetch() ?>

        <section class="taille_1170 bloc_gestions">

            <h1>Modifier l'article</h1>

            <form action="administration.php?action=updateArticleAdmin&id=<?= $articleAdmin['id'] ?>" method="POST">
                <table class="informationsusers_input style_input_editarticle">
                    <tr>
                        <td><label for="title">Titre de l'article : </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="title" name="title" value="<?= $articleAdmin['title'] ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="description_articles">Description courte </label><span class="caracteres_actualites">(100 caractères max) :</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="description_articles" name="description_articles" value="<?= $articleAdmin['description_articles'] ?>"></td>
                    </tr>

                    <tr>
                        <td><label for="content">Contenu : </label></td>
                    </tr>
                    <tr>
                        <td><textarea name="content" id="content" cols="30" rows="10"><?= $articleAdmin['content'] ?></textarea></td>
                    </tr>

                    <tr>
                        <td>
                            <div class="style_btn_informationsusers">
                                <button type="submit" class="btn_modifier_informationsusers">Enregistrer</button>
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