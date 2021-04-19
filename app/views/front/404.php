<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_titre_general">
    <h1>Page introuvable !</h1>
</section>

<section class="taille_1170 bloc_404">    
    <h2>404</h2>
    <p>La page n'existe pas ou a été supprimée</p>
 </section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>