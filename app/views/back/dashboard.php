<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>

<section class="taille_1170">

<h1>Bonjour <?= $_SESSION['firstname'] ?></h1>






</section>




<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>