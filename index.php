<?php 

session_start();

//Prend les informations du fichier autoload.php
require_once __DIR__ . '/vendor/autoload.php';


try{

    $frontController = new \Project\Controllers\Front\FrontController();

    if(isset($_GET['action'])){

        // ACTUALITES
        // Page Actualités
        if($_GET['action'] == 'actualites'){

            // Pagination
            if(isset($_GET['page'])){
                $quantitePage = $_GET['page'];
            }else{
                $quantitePage = 1;
            }

            $frontController->actualites($quantitePage);
        } 

        // Page Actualités - Single
        else if($_GET['action'] == 'actualitesSingle'){
            $id = $_GET['id'];
            $frontController->actualitesSingle($id);
        } 

              

        // CONTACTEZ-NOUS !
        // Page Contactez-Nous ! - Envoi du formulaire
        else if($_GET['action'] == 'contactForm'){
            $lastname = htmlspecialchars($_POST['lastname_contactform']);
            $email = htmlspecialchars($_POST['email_contactform']);
            $telephone = htmlspecialchars($_POST['telephone_contactform']);
            $message = htmlspecialchars($_POST['message_contactform']);
            $rgpdContacform = htmlspecialchars($_POST['rgpd_contactform'] ?? false);

            $frontController->contactForms($lastname, $email, $telephone, $message, $rgpdContacform);
        
        }
        
        else {
            // Methode sans traitement préalable
            $method = $_GET['action'];

            try {
                $frontController->$method();
            } catch(Error $_) {
                $frontController->p404();
            }

        }




    }else{ //Si aucune action n'est réalisé, la page est redirigé sur la page d'accueil

        $frontController->accueil();
    }


}catch(Exception $e){ //En cas de problème sur l'action, il affiche un message d'erreur
    
    die('Erreur: ' . $e->getMessage());
    
}