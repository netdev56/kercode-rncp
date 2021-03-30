<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

    <section class="taille_1170 bloc_titre_legite">
        <h1>Présentation du gîte</h1>
    </section>

        <?php // Zone de texte 1 ?>
        <section class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone_images">
                <img src="app/public/front/images/pagelegite/piece-de-vie-gite-morbihan-pluneret-auray.webp" alt="Location gîte en Bretagne">
                <img src="app/public/front/images/pagelegite/piece-de-vie-pluneret-quiberon-st-goustan.webp" alt="Pièce de vie du gite">
            </div>

            <div class="bloc_gite_zone_texte">
                <h2>PIÈCE DE VIE</h2>
                Cuisine équipée : plaque induction, four, micro-onde, lave-vaisselle, grand réfrigérateur…<br>
                Salon chaleureux avec TV & Coin repas
            </div>

        </section>


        <section class="taille_max_legite">
        <div class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone_texte">
                <h2>CELLIER</h2>
                Cuisine équipée : plaque induction, four, micro-onde, lave-vaisselle, grand réfrigérateur…
            </div>

            <div class="bloc_gite_zone_images">
                <img src="app/public/front/images/pagelegite/drapeau-breton.webp" alt="Location gîte Bretagne">
            </div>
        </div>
        </section>


        <section class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone3_images">
                <img src="app/public/front/images/pagelegite/chambre-gite-location-bretagne-morbihan-56.webp" alt="Chambre gîte Bretagne" class="image1_zone3_gite">
                <img src="app/public/front/images/pagelegite/salle-d-eau-gite-auray-pluneret-bretagne-56.webp" alt="Salle d'eau avec colonne de douche hydro" class="image2_zone3_gite">
            </div>

            <div class="bloc_gite_zone_texte">
                <h2>SUITE PARENTALE</h2>
                Cette chambre au style cosy inclue une salle d’eau privée avec sa douche à l’italienne ( PMR ), équipée d’une colonne de douche hydro.<br>
                La chambre offre un espace de rangement ainsi qu’un coin bureau.
            </div>

        </section>

    <?php // Parallax ?>
    <div class="parallax_legite">
        <h3>Golfe du Morbihan</h3>
    </div>

<?php // Zone de texte 2 ?>
<section class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone_images">
                <img src="app/public/front/images/pagelegite/location-bord-de-mer-morbihan-bretagne.webp" alt="Location en bord de mer">
                <img src="app/public/front/images/pagelegite/location-gite-maison-morbihan-quiberon-erdeven.webp" alt="Location gîte à Pluneret">
            </div>

            <div class="bloc_gite_zone_texte">
                <h2>CHAMBRE (étage)</h2>
                Cette chambre, au style marin, offre des espaces de rangements et un coin bureau.<br>
                La pièce est spacieuse et lumineuse.
            </div>

        </section>


        <section class="taille_max_legite">
        <div class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone_texte">
                <h2>SALLE DE BAIN (étage)</h2>
                Toujours dans un style marin, vous y trouverez une baignoire d’angle et un WC.
            </div>

            <div class="bloc_gite_zone_images">
                <img src="app/public/front/images/pagelegite/salle-de-bain-etage-location-maison-carnac-quiberon.webp" alt="Location de gite à Pluneret">
                <img src="app/public/front/images/pagelegite/salle-de-bail-etage-location-gite-tinite-sur-mer.webp" alt="Salle de bain location gîte">
            </div>
        </div>
        </section>


        <section class="taille_1170 bloc_gite_zone">

            <div class="bloc_gite_zone3_images">
                <img src="app/public/front/images/pagelegite/louer-un-gite-en-bretagne-pluneret-quiberon-vannes.webp" alt="Louer un gîte en Bretagne" class="image1_zone3_gite">
                <img src="app/public/front/images/pagelegite/maison-location-gite-bretagne-morbihan-56.webp" alt="Maison à louer en Bretagne" class="image2_zone3_gite">
            </div>

            <div class="bloc_gite_zone_texte">
                <h2>EXTÉRIEUR</h2>
                À l’extérieur vous pourrez profiter en toute tranquillité du soleil breton sur l’une des deux terrasses.<br>
                Un barbecue est à disposition pour vos soirées d’été.<br>
                Un coin pelouse permettra à vos enfants de s’y récréer.<br>
                Un parking privé pouvant accueillir deux véhicules.
            </div>

        </section>




<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>