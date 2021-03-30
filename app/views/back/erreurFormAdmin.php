<!-- Inject le header - contenu du tampon de sortie -->
<?php ob_start(); ?>

<section class="taille_1170 bloc_gestions">

<h1>Tous les champs ne sont pas remplis</h1>


</section>




<!-- termine la session de temporisation -->
<?php $content = ob_get_clean(); ?>

<!-- Inject le template -->
<?php require 'templates/template.php'; ?>