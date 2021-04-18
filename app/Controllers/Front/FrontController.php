<?php 

namespace Project\Controllers\Front; // Evite les conflits entre les différentes fonctions

class FrontController{

    // ACCUEIL
    // Page Accueil
    function accueil(){ 

        $meta_description = "Gîte La Cave est un gite à louer sur Pluneret dans le Morbihan en Bretagne. Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location de gite à Pluneret dans le Morbihan en Bretagne";

        require 'app/views/front/accueil.php';
    }


    // LE GITE
    // Page Le gîte
    function legite(){

        $meta_description = "Louer un gite en Bretagne, notre gîte est situé à Pluneret proche de Quiberon, Vannes, Sainte Anne d'Auray, Carnac dans le Morbihan";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location de vacance à Pluneret proche de Quiberon, Auray";

        require 'app/views/front/leGite.php';
    }


    // TARIFS
    // Page tarifs
    function tarifs(){ 

        $meta_description = "Gîte La Cave est un gite à louer sur Pluneret dans le Morbihan en Bretagne. Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location Pluneret dans le Morbihan en Bretagne";

        require 'app/views/front/tarifs.php';
    }


    // ACTUALITES
    // Page Actualités
    function actualites($quantitePage){

        $meta_description = "Venez louer votre gite proche de Carnac, Quiberon, Vannes, Trinité sur mer, Vannes, Sarzeau. Location au calme proche de la mer pour se détendre";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location gite proche de Quiberon, Carnac, Vannes, Auray";


        $articles = new \Project\Models\ArticleManager();

        // Pagination
        $numeroDePage = $articles->nombreDePage();
        if(!($quantitePage>0 && $quantitePage<=$numeroDePage)){
            $quantitePage = 1;
        }
   
        $allArticles = $articles->readArticles($quantitePage);

        require 'app/views/front/actualites.php';
    }

    // Page Actualités - Single
    function actualitesSingle($id){

        $meta_description = "Venez louer votre gite proche de Carnac, Quiberon, Vannes, Trinité sur mer, Vannes, Sarzeau. Location au calme proche de la mer pour se détendre dans le Morbihan";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location gite proche de Quiberon, Carnac";

        $articlesSingle = new \Project\Models\ArticleManager();
        $allArticlesSingle = $articlesSingle->readArticlesSingle($id);

        require 'app/views/front/actualitesSingle.php';
    }


    // LIVRE D'OR
    // Page Livre d'or
    function livredor(){

        $meta_description = "Gîte La Cave - Location à Pluneret proche de Quiberon, Vannes, Auray, Carnac, Trinité sur Mer";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location gite proche de Vannes, Auray en Bretagne";

        $guestbook = new \Project\Models\GuestbookCommentManager();
        $allGuestbookComments = $guestbook->guestbooks();

        require 'app/views/front/livreDor.php';
    }
        
    
    // CONTACTEZ-NOUS
    // Page Contactez-Nous !
    function contactezNous($errors=array()){

        $meta_description = "Gîte à louer à Pluneret dans le Morbihan proche de Carnac, Auray, Quiberon, la Trinité sur Mer. Gîte La Cave - 43 rue de Lescheby 56400 Pluneret";

        $meta_robots = "index,follow";

        $meta_title = "Gîte La Cave - Location Pluneret dans le Morbihan en Bretagne";

        $errors = $errors;
        require 'app/views/front/contactezNous.php';
    }


    // Page Contactez-Nous ! - Envoi du formulaire
    function contactForms($lastname, $email, $telephone, $message, $rgpdContacform){

        $meta_description = "Gîte à louer à Pluneret dans le Morbihan proche de Carnac, Auray, Quiberon, la Trinité sur Mer. Gîte La Cave - 43 rue de Lescheby 56400 Pluneret";

        $meta_robots = "noindex,nofollow";

        $meta_title = "Gîte La Cave - Location Pluneret dans le Morbihan en Bretagne";


        $contactManager = new \Project\Models\ContactFormManager();
        
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $errors=array();


        // Email
        if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) == false){

            $errors["email_invalide"] = "L'email n'est pas correct";

        }if(empty($email)){

            $errors["email_requis"] = "Un email est requis";

        // Nom
        }if(empty($lastname)){

            $errors["lastname_requis"] = "Un nom est requis";

        // Téléphone
        }if(empty($telephone)){

            $errors["telephone_requis"] = "Un numéro de télephone est requis";

        }if(!is_numeric($telephone)){

            $errors["telephone_num"] = "Votre numéro de télephone doit être composé de chiffres";

        // Message
        }if(empty($message)){

            $errors["message_requis"] = "Un message est requis";

        // RGPD
        }if(empty($rgpdContacform)){

            $errors["rgpdContacform_requis"] = "Cocher la case RGPD pour envoyer le message";

        }if(empty($errors)){
            
            $contactUserMail = $contactManager->contactForm($lastname, $email, $telephone, $message, $rgpdContacform);
            require 'app/views/front/contactezNous.php';
        }else{
            $this->contactezNous($errors);
        }
    }


    // PAGE PLAN DU SITE
    function planDuSite(){

        $meta_description = "Gîte à louer à Pluneret dans le Morbihan proche de Carnac, Auray.";

        $meta_robots = "index,follow";

        $meta_title = "Gîte à louer à Pluneret dans le Morbihan";


        $articlesPlan = new \Project\Models\ArticleManager();
        $allArticlesPlan = $articlesPlan->planDuSite();

        require 'app/views/front/planDuSite.php';
    }


    // PAGE MENTIONS LEGALES
    function mentionsLegales(){

        $meta_description = "Mentions Légales";

        $meta_robots = "noindex,nofollow";

        $meta_title = "Mentions Légales";
        
        require 'app/views/front/mentionsLegales.php';
    }

    // PAGE 404
    function p404(){

        $meta_description = "Page 404";

        $meta_robots = "noindex,nofollow";

        $meta_title = "Page 404";

        require 'app/views/front/404.php';
    }




}