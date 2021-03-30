<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>

<section class="taille_1170 bloc_gestions">

<h1>Ajouter un commentaire</h1>

<form action="administration.php?action=createComments&iduser=<?= $_SESSION['id'] ?>" method="post">

            <div class="informationsusers_input">
                
                <textarea id="comments" name="comments" placeholder="Votre commentaire" class="textarea_guestbook"></textarea>
                    
                <div class="style_btn_informationsusers">
                    <button type="submit" class="btn_modifier_informationsusers">Ajouter</button>
                </div>

            </div>


</form> 






<h2>Commentaires du livre d'or</h2>

<div class="style_gestions">

<!-- Début de la condition du ROLE -->
<!-- ROLE ADMIN-->
<?php if($_SESSION['roleusers'] == 'admin'){ ?>

<?php foreach($allGuestbookCommentsAdmin as $allComments){ ?>

<div class="case_gestions">

    <p><span>Posté par :</span> <?=$allComments['pseudo']?></p>
    <p><span>Le :</span> <?=$allComments['datePublication']?></p>
    <p><span>Commentaire :</span> <?=$allComments['comments']?></p>

<div class="btn_gestions">
    <button class="btn_modifier_informationsusers"><a href="administration.php?action=commentEdition&id=<?= $allComments['id'] ?>">Modifier</a></button>

    <button class="btn_supprimer_informationsusers"><a href="administration.php?action=deletComment&id=<?= $allComments['id'] ?>">Supprimer</a></button>
</div>

</div>


<?php } ?>


<!-- ROLE USER-->
<?php }else{ ?>

<?php foreach($allGuestbookComment as $allComments){ ?>


    <div class="case_gestions">

    <p><span>Posté par :</span> <?=$allComments['pseudo']?></p>
    <p><span>Le :</span> <?=$allComments['datePublication']?></p>
    <p><span>Commentaire :</span> <?=$allComments['comments']?></p>

<div class="btn_gestions">
    <button class="btn_modifier_informationsusers"><a href="administration.php?action=commentEdition&id=<?= $allComments['id'] ?>&id_user=<?= $_SESSION['id'] ?>">Modifier</a></button>

    <button class="btn_supprimer_informationsusers"><a href="administration.php?action=deletComment&id=<?= $allComments['id'] ?>&id_user=<?= $_SESSION['id'] ?>">Supprimer</a></button>
</div>

</div>


<?php } ?>


<!-- Fin de la condition du ROLE -->
<?php } ?>

</div>

</section>

<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>