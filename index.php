<?php 

session_start();

//Prend les informations du fichier autoload.php
require_once __DIR__ . '/vendor/autoload.php';


try{

    $frontController = new \Project\Controllers\Front\FrontController();

    if(isset($_GET['action'])){

        // ACCUEIL
        // Page Accueil
        if($_GET['action'] == 'accueil'){
            $frontController->accueil();
        } 



        // LE GITE
        // Page Le gîte
        if($_GET['action'] == 'legite'){
            $frontController->legite();
        } 


        // TARIFS
        // Page tarifs
        if($_GET['action'] == 'tarifs'){
            $frontController->tarifs();
        } 


        // ACTUALITES
        // Page Actualités
        if($_GET['action'] == 'actualites'){
            $frontController->actualites();
        } 

        // Page Actualités - Single
        if($_GET['action'] == 'actualitesSingle'){
            $id = $_GET['id'];
            $frontController->actualitesSingle($id);
        } 


        // LIVRE D'OR
        // Page Livre d'or
        if($_GET['action'] == 'livredor'){
            $frontController->livredor();
        }
        

        // CONTACTEZ-NOUS
        // Page Contactez-Nous !
        if($_GET['action'] == 'contactezNous'){
            $frontController->contactezNous();
        }
                

        // Page Contactez-Nous ! - Envoi du formulaire
        else if($_GET['action'] == 'contactForm'){
            $lastname = htmlspecialchars($_POST['lastname_contactform']);
            $email = htmlspecialchars($_POST['email_contactform']);
            $telephone = htmlspecialchars($_POST['telephone_contactform']);
            $message = htmlspecialchars($_POST['message_contactform']);
            $rgpdContacform = htmlspecialchars($_POST['rgpd_contactform']);

            // // Vérifie que les champs sont remplis
            // if(!empty($lastname) && (!empty($email) && (!empty($telephone) && (!empty($message) && (!empty($rgpdContacform)))))){
            $frontController->contactForms($lastname, $email, $telephone, $message, $rgpdContacform);
            // }else{
            //     header('Location: index.php?action=erreurForm');
            // }

        }

        // COOKIES
        // Acceptation des cookies
        if($_GET['action'] == 'accepteCookie'){
            setcookie('accepteCookie', 'true', time() + 365*24*3600);
            $frontController->accepteCookie();
        } 


        // PAGE ERREUR
        // Page erreur formulaire
        if($_GET['action'] == 'erreurForm'){
            $frontController->erreurForm();
        }


        // PAGE PLAN DU SITE
        if($_GET['action'] == 'planDuSite'){
            $frontController->planDuSite();
        }


        // PAGE MENTIONS LEGALES
        if($_GET['action'] == 'mentionsLegales'){
            $frontController->mentionsLegales();
        }

        // PAGE 404
        if($_GET['action'] == 'p404'){
            $frontController->p404();
        }

        // PAGE COOKIE
        if($_GET['action'] == 'cookie'){
            $frontController->cookie();
        }

        // PAGE SITEMAP.XML
        if($_GET['action'] == 'siteMap'){
            $frontController->siteMap();
        }




    }else{ //Si aucune action n'est réalisé, la page est redirigé sur la page d'accueil
        $frontController->accueil();
    }


}catch(Exception $e){ //En cas de problème sur l'action, il affiche un message d'erreur
    die('Erreur: ' . $e->getMessage());
}