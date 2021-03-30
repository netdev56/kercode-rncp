<?php // Inject le header - contenu du tampon de sortie ?>
<?php ob_start(); ?>



<section class="taille_1170 bloc_titre_general">
        <h1>Contactez-Nous !</h1>
    </section>

    

    <section class="taille_1170 bloc_formulaire_contact">

<?php // Image de gauche ?>
<div class="bloc_contact_gauche"></div>

<?php // Formulaire de contact ?>
<div class="bloc_contact_droite">

    <p class="texte_accroche_contact">Vous souhaitez faire une réservation par téléphone, vous avez des questions, informations ou autres… N’hésitez pas à nous contacter.</p>


    <div class="icones_contact">
        <img src="/app/public/front/images/icones/adresse-gite-la-cave-pluneret.svg" class="icones_adresse_contact" alt="Localisation du gîte La Cave">
        <p class="icones_texte_contact">43 rue de Lescheby 56400 Pluneret</p>
    </div>

    <div class="icones_contact">
        <img src="/app/public/front/images/icones/telephone-gite-la-cave.svg" class="icones_telephone_contact" alt="Contactez le gîte La Cave">
        <p class="icones_texte_contact">02 97 56 40 75</p>
    </div>


    <form action="index.php?action=contactForm" method="post">
    
        <label for="lastname_contactform">Votre nom : </label>
        <input type="text" id="lastname_contactform" name="lastname_contactform" class="champ_contact" placeholder="nom">
    
        <label for="email_contactform">Votre email : </label>
        <input type="email" id="email_contactform" name="email_contactform" class="champ_contact" placeholder="email">
    
        <label for="telephone_contactform">Votre téléphone : </label>
        <input type="tel" id="telephone_contactform" name="telephone_contactform" class="champ_contact" placeholder="téléphone">

        <label for="message_contactform">Votre message</label>
        <textarea id="message_contactform" name="message_contactform" class="champ_contact textarea_contact" placeholder="message"></textarea>
        
        <input type="checkbox" id="rgpd_contactform" name="rgpd_contactform" value="RGPD du formulaire de contact validé">
        <label for="rgpd_contactform" class="rgpd_contact">En soumettant ce formulaire, j'accepte que les informations saisies dans ce formulaire soient traitées pour permettre de me recontacter</label>

        <input type="submit" class="btn_contact" value="Envoyer">

    </form>


</div>

    </section>


<?php // termine la session de temporisation ?>
<?php $content = ob_get_clean(); ?>

<?php // Inject le template ?>
<?php require 'templates/template.php'; ?>