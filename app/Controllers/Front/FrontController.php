<?php 

namespace Project\Controllers\Front; // Evite les conflits entre les différentes fonctions

class FrontController{

    // ACCUEIL
    // Page Accueil
    function accueil(){ 
        require 'app/views/front/accueil.php';
    }


    // LE GITE
    // Page Le gîte
    function legite(){
        require 'app/views/front/leGite.php';
    }


    // TARIFS
    // Page tarifs
    function tarifs(){ 
        require 'app/views/front/tarifs.php';
    }


    // ACTUALITES
    // Page Actualités
    function actualites(){
        $articles = new \Project\Models\ArticleManager();
        $allArticles = $articles->readArticles();

        require 'app/views/front/actualites.php';
    }

    // Page Actualités - Single
    function actualitesSingle($id){
        $articlesSingle = new \Project\Models\ArticleManager();
        $allArticlesSingle = $articlesSingle->readArticlesSingle($id);

        require 'app/views/front/actualitesSingle.php';
    }


    // LIVRE D'OR
    // Page Livre d'or
    function livredor(){
        $guestbook = new \Project\Models\GuestbookCommentManager();
        $allGuestbookComments = $guestbook->guestbooks();

        require 'app/views/front/livredor.php';
    }
        
    
    // CONTACTEZ-NOUS
    // Page Contactez-Nous !
    function contactezNous(){

    require 'app/views/front/contactezNous.php';

    }


    // Page Contactez-Nous ! - Envoi du formulaire
    function contactForms($lastname, $email, $telephone, $message, $rgpdContacform){
        $contactManager = new \Project\Models\ContactFormManager();
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $contactUserMail = $contactManager->contactForm($lastname, $email, $telephone, $message, $rgpdContacform);
            require 'app/views/front/contactezNous.php';
        }else{
            header('Location: index.php?action=erreurForm');
        }
    }


    // COOKIES
    // Acceptation des cookies - expire au bout d'un an
    function accepteCookie(){ 
        header('Location: ./');      
    }



    // PAGE ERREUR
    // Page erreur formulaire
    function erreurForm(){
        require 'app/views/front/erreurForm.php';
    }


    // PAGE PLAN DU SITE
    function planDuSite(){
        $articlesPlan = new \Project\Models\ArticleManager();
        $allArticlesPlan = $articlesPlan->readArticles();

        require 'app/views/front/planDuSite.php';
    }


    // PAGE MENTIONS LEGALES
    function mentionsLegales(){
        require 'app/views/front/mentionsLegales.php';
    }

    // PAGE 404
    function p404(){
        require 'app/views/front/404.php';
    }

    // PAGE COOKIE
    function cookie(){
        require 'app/views/front/cookie.php';
    }


    // PAGE SITEMAP.XML
    function siteMap(){
        $articlesSiteMap = new \Project\Models\ArticleManager();
        $allsiteMap = $articlesSiteMap->readArticles();

        require 'app/views/front/siteMap.php';
    }




}