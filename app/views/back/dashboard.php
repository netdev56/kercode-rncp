<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

<section class="taille_1170 bloc_dashboard">

    <?php // zone 1 - Temps de la journée ?>
    <h1>Bonjour <span> <?= $_SESSION['firstname'] ?></span>, Quel temps fait-il aujourd'hui à Pluneret ?</h1>

    <div class="zone1_meteo">

        <div class="bloc-imagemeteo-info">
            <div class="bloc-imagemeteo">
                <img src="./app/public/back/images/apimeteo/jour/04d.svg" alt="Image du temps" class="imagemeteo">
            </div>
        </div>

        <div class="bloc-info">
            <p class="temps"></p>
            <p class="temperature"></p>
        </div>

        <div class="bloc-heure-prevision">
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
            <div class="bloc-heure">
                <p class="heure-prevision"></p>
                <p class="heure-valeur"></p>
            </div>
        </div>

    </div>


    <?php // zone 2 - Températures de la semaine ?>
    <h2>Températures de la semaine</h2>

    <div class="bloc-jours-prevision">
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
        <div class="bloc-jours">
            <p class="jours-prevision"></p>
            <p class="jours-valeur"></p>
        </div>
    </div>

</section>


<?php // Script JS pour la station de météo ?>
<script type="module" src="app/public/back/js/meteo.js"></script>

<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>