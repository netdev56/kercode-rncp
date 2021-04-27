<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>

        <?php // Slide ?>
        <section class="slides">

            <div class="slides-item">
                <img src="app/public/front/images/pageaccueil/gite-la-cave.webp" alt="Gîte La Cave à Pluneret">
                <div class="slides-texte">
                    <h1>Gîte La Cave</h1>
                    <p>Le gîte est située au fond d’un village de Pluneret, entre Auray et Sainte Anne d’Auray, à 15 min du Golfe du Morbihan.</p>
                </div>
            </div>

            <div class="slides-item">
                <img src="app/public/front/images/pageaccueil/quiberon.webp" alt="Quiberon">
                <div class="slides-texte">
                    <h2>Quiberon</h2>
                    <p>La ville se situe à la pointe de la presqu’île du même nom. C’est le parfait endroit pour admirer la côte sauvage. Aussi, les amoureux de sports nautiques pourront profiter de beaux spots sur la presqu’île.</p>
                </div>
            </div>

            <div class="slides-item">
                <img src="app/public/front/images/pageaccueil/st-anne-d-auray.webp" alt="Sainte Anne d'Auray">
                <div class="slides-texte">
                    <h2>Sainte Anne d'Auray</h2>
                    <p>Il est facile de s’y rendre à pied depuis un petit chemin situé au fond du village où se situe le gîte. La petite commune est connue pour son caractère religieux et sa basilique qui accueille chaque année des pèlerins venant de loin.</p>
                </div>
            </div>

        </section>

        <?php // Zones de textes ?>
        <section>

            <div class="articles_accueil_style">

                <?php // Zone 1 ?>
                <div class="taille_1170">
                    <div class="zone1_accueil">
                        <span>NOTRE PETITE MAISON DE CAMPAGNE VOUS OFFRIRA</span>
                        <h3>CONFORT & TRANQUILLITÉ</h3>
                        <p>C’est en août 2016 que le gîte a accueilli ses premiers vacanciers.</p>
                        <p>Durant 4 années, nous avons rénové cette ancienne « cave » afin d’y recevoir des visiteurs de divers horizons.</p>
                        <p>Soucieux de vous offrir le meilleur confort, nous avons aménagé le gîte de façon chaleureuse pour que vous passiez de belles vacances en Bretagne.</p>
                    </div>
                </div>

                <?php // Zone 2 ?>
                <div class="taille_max">
                    <div class="taille_1170 bloc-zone2-accueil">
                        <div><img src="app/public/front/images/pageaccueil/gite-pluneret-morbihan.webp" alt="Gîte dans le Morbihan"></div>
                        <div class="zone2_accueil">
                            <h3>GÎTE TOUT CONFORT</h3>
                            <span>POUR 4 PERSONNES – ACCÈS PMR</span>
                            <p>Au rez-de-chaussée une chambre et sa salle d’eau privée se situent à côté de la pièce de vie.</p>
                            <p>À l’étage se trouvent une deuxième chambre spacieuse et une salle de bain.</p>
                        </div>
                    </div>
                </div>

                <?php // Zone 3 ?>
                <div class="taille_1170">
                    <div class="zone3_accueil">
                        <span>QUOI FAIRE EN BRETAGNE?</span>
                        <h3>LES SITES À VISITER DANS LE MORBIHAN</h3>
                    </div>
                </div>

            </div>

            <?php // Card ?>
            <div class="taille_1170">
                <div class="carteAccueil">
                    <div class="card">
                        <div class="blocImage">
                            <img src="app/public/front/images/pageaccueil/carnac-morbihan.webp" alt="Carnac">
                        </div>
                        <div class="bloc-texte">
                            <h4>Carnac</h4>
                            <p>Cette station balnéaire est connue pour ses alignements. C’est en effet là que se dresse un grand nombre de menhirs qui en   font le plus grand ensemble mégalithique au monde.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blocImage">
                            <img src="app/public/front/images/pageaccueil/vannes-morbihan.webp" alt="Vannes">
                        </div>
                        <div class="bloc-texte">
                            <h4>Vannes</h4>
                            <p>Cette cité des Vénètes est à visiter lors de votre séjour en Bretagne. La vieille ville est entourée de ses remparts et  regroupe bons nombres de petits commerces et restaurants.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="blocImage">
                            <img src="app/public/front/images/pageaccueil/belle-ile-en-mer-morbihan.webp" alt="Belle Île en Mer">
                        </div>
                        <div class="bloc-texte">
                            <h4>Belle Île en Mer</h4>
                            <p>Située au large de Quiberon, cette île est grande et permet d’admirer de magnifiques paysages du littoral breton.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>