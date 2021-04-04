<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_gestions">

<?php // Formulaire pour ajouter un commentaire ?>
<h1>Ajouter un commentaire</h1>

<form action="administration.php?action=createComments&iduser=<?= $_SESSION['id'] ?>" method="post">

            <div class="informationsusers_input">
                
                <textarea id="comments" name="comments" placeholder="Votre commentaire" class="textarea_guestbook"></textarea>
                    
                <div class="style_btn_informationsusers">
                    <button type="submit" class="btn_modifier_informationsusers">Ajouter</button>
                </div>

            </div>


</form> 



<?php // Commentaires en ligne ?>
<h2>Commentaires du livre d'or</h2>

<div class="style_gestions">

<?php // Début de la condition du ROLE ?>
<?php // ROLE ADMIN ?>
<?php if($_SESSION['roleusers'] == 'admin'){ ?>

<?php foreach($allGuestbookCommentsAdmin as $allComments){ ?>

<div class="case_gestions">

    <p><span>Posté par :</span> <?=$allComments['pseudo']?></p>
    <p><span>Le :</span> <?=$allComments['datePublication']?></p>
    <p class="commentaire_gestbook"><span>Commentaire :</span> <?=$allComments['comments']?></p>

<div class="btn_gestions">
    <div class="btn_modifier_informationsusers"><a href="administration.php?action=commentEdition&id=<?= $allComments['id'] ?>">Modifier</a></div>

    <div class="btn_supprimer_informationsusers"><a href="administration.php?action=deletComment&id=<?= $allComments['id'] ?>">Supprimer</a></div>
</div>

</div>


<?php } ?>

<?php // ROLE USER ?>
<?php }else{ ?>

<?php foreach($allGuestbookComment as $allComments){ ?>


    <div class="case_gestions">

    <p><span>Posté par :</span> <?=$allComments['pseudo']?></p>
    <p><span>Le :</span> <?=$allComments['datePublication']?></p>
    <p class="commentaire_gestbook"><span>Commentaire :</span> <?=$allComments['comments']?></p>

<div class="btn_gestions">
    <div class="btn_modifier_informationsusers"><a href="administration.php?action=commentEdition&id=<?= $allComments['id'] ?>&id_user=<?= $_SESSION['id'] ?>">Modifier</a></div>

    <div class="btn_supprimer_informationsusers"><a href="administration.php?action=deletComment&id=<?= $allComments['id'] ?>&id_user=<?= $_SESSION['id'] ?>">Supprimer</a></div>
</div>

</div>


<?php } ?>

<?php // Fin de la condition ?>
<?php } ?>

</div>

</section>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>