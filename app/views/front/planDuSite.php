<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

    <section class="taille_1170 bloc_titre_general">
        <h1>Plan du site</h1>
    </section>
    
    <section class="taille_1170">

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="./" title="Accueil - La Cave">Accueil</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=legite" title="Le Gîte - La Cave">Le gîte</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=tarifs" title="Tarifs - La Cave">Tarifs</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=actualites" title="Actualités - La Cave">Actualités</a></p>
        </div>

        <?php foreach($allArticlesPlan as $allArticlePlan){ ?>
            <div class="bloc_lien_planDuSite bloc_lien_actus">
                <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
                <p><a href="index.php?action=actualitesSingle&id=<?= $allArticlePlan['id'] ?>" title="<?= $allArticlePlan['title'] ?>"><?= $allArticlePlan['title'] ?></a></a></p>
            </div>
        <?php } ?>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=livredor" title="Livre d'or - La Cave">Livre d'or</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=contactezNous" title="Contactez-Nous - La Cave">Contactez-nous !</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=planDuSite" title="Plan du site - La Cave">Plan du site</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="index.php?action=mentionsLegales" title="Mentions Légales - La Cave">Mentions Légales</a></p>
        </div>

        <div class="bloc_lien_planDuSite">
            <img src="/app/public/front/images/icones/chevron-gite-pluneret.svg" alt="Localisation du gîte La Cave" 
        class="svg_planDuSite">
            <p><a href="administration.php?action=connexionAdministration" title="Connexion - La Cave">Connexion</a></p>
        </div>

    </section>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>