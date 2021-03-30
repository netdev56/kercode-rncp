<?php 

namespace Project\Controllers\Back;

// Use Project\Models\UsersManager;

class BackController{

    // Page de connexion Administration
    function connexionAdministration(){

        require 'app/views/back/connexionUsers.php';
    }


    // Page d'inscription Utilisateur
    function registrationFormUser(){

        require 'app/views/back/registrationFormUser.php';
    }


    // Formulaire d'inscription Utilisateur
    function createUser($pseudo, $lastname, $firstname, $mail, $pass){
        $createUserManager = new \Project\Models\UsersManager();
        $user = $createUserManager->createUser($pseudo, $lastname, $firstname, $mail, $pass);

        header('Location: administration.php?action=connexionAdministration');
    }


    // Formulaire de connexion Administration
    function connexionAdmin($mail, $pass){
        

        $usersManager = new \Project\Models\UsersManager();
        $connexionAd = $usersManager->recupInfosConnexion($mail, $pass);
        $result = $connexionAd->fetch();

        // Compare les mots de passe entre la BDD et le champ
        $isPasswordCorrect = password_verify($pass, $result['pass']);

        $_SESSION['pseudo'] = $result['pseudo'];
        $_SESSION['lastname'] = $result['lastname'];
        $_SESSION['firstname'] = $result['firstname'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['pass'] = $result['pass'];
        $_SESSION['id'] = $result['id'];
        $_SESSION['roleusers'] = $result['roleusers'];


        if($isPasswordCorrect){
            require 'app/views/back/dashboard.php';
        }else{
            echo 'Vos informations sont incorrectes';
        }
    }


    // DASHBOARD
    // Page Dashboard
    function dashboard(){
        require 'app/views/back/dashboard.php';
    }

    

    // LIVRE D'OR
    // Page des commentaires du livre d'or de l'utilisateur USER
    function guestbook($id){
        $guestbookComment = new \Project\Models\GuestbookCommentManager();
        $allGuestbookComment = $guestbookComment->affichageGuestbookComment($id);

        require 'app/views/back/guestbook.php';
    }


    // Page : Afficher des commentaires du livre d'or de l'utilisateur ADMIN
    function guestbookAdmin($id){
        $guestbookAdmin = new \Project\Models\GuestbookCommentManager();
        $allGuestbookCommentsAdmin = $guestbookAdmin->affichageGuestbookCommentAdmin($id);

        require 'app/views/back/guestbook.php';
    }


    // Ajouter un commentaire dans le Guestbook
    function createComment($comments, $is_user){
        $createComment = new \Project\Models\GuestbookCommentManager();
        $createComments = $createComment->createComment($comments, $is_user);

        header('Location: administration.php?action=dashboard');
        // require 'app/views/back/guestbook.php';
     
    }


    // Page : Afficher éditer un commentaire du Guestbook
    function commentsEdition($id_guestbooks)
    {
        $commentsEdition = new \Project\Models\GuestbookCommentManager();
        $commentEdition = $commentsEdition->editionComment($id_guestbooks);
        
        require 'app/views/back/guestbookEditComment.php';

    }


    // Editer le commentaire dans la page guestbookEditComment.php
    function editCommentsGuestbook($id_editComments, $edComments)
    {
        $editComment = new \Project\Models\GuestbookCommentManager();
        $editComments = $editComment->editComment($id_editComments, $edComments);

        header('Location: administration.php?action=dashboard');
        // require 'app/views/back/guestbook.php';
    }


    // Supprimer un commentaire du livre d'or
    function deletComment($id){
        $deletCmt = new \Project\Models\GuestbookCommentManager();
        $deletComments = $deletCmt->deletComment($id);

        header('Location: administration.php?action=dashboard');
    }




    // ACTUALITES
    // Page actualités de l'utilisateur ADMIN
    function adminArticles(){
        $articlesAdmin = new \Project\Models\ArticleManager();
        $allArticlesAdmin = $articlesAdmin->articlesAdmin();

        require 'app/views/back/actualites.php';
    }


    // Supprimer un articles d'actualités ADMIN
    function deletArticleAdmin($id){
        $article = new \Project\Models\ArticleManager();
        $deletArticles = $article->deletAdminArticle($id);

        header('Location: administration.php?action=actualitesAdmin');
    }


    // Page éditer un article d'actualités ADMIN
    function editArticleAdmin($id){
        $editArticleAdmin = new \Project\Models\ArticleManager();
        $editArticlesAdmin = $editArticleAdmin->EditAdminArticle($id);

        require 'app/views/back/actualitesEditArticle.php';
    }


    // Editer un article d'actualités ADMIN
    function editUpdateArticleAdmin($id, $title, $content, $description_articles){
        $updateArticleAdmin = new \Project\Models\ArticleManager();
        $updateArticlesAdmin = $updateArticleAdmin->updateAdminArticle($id, $title, $content, $description_articles);

        header('Location: administration.php?action=actualitesAdmin');
    }


    // Ajouter un article d'actualités ADMIN
    function createArticleAdmin($title, $content, $description_articles, $id_user){

        $createArticleAdmin = new \Project\Models\ArticleManager();
        $createArticlesAdmin = $createArticleAdmin->createAdminArticle($title, $content, $description_articles, $id_user);
        header('Location: administration.php?action=actualitesAdmin');
     
    }

    // Page Image articles d'actualités ADMIN
    function adminImgArticles($id){
        $articlesImgAdmin = new \Project\Models\ArticleManager();
        $allArticlesImgAdmin = $articlesImgAdmin->articlesImgAdmin($id);

        require 'app/views/back/actualitesEditImageArticle.php';
    }

    // Editer une Image articles d'actualités ADMIN
    function updateImagesArticle($id, $titre_img_articles)
    {
        $target_dir = "app/public/front/images/articles/"; //Spécifie le répertoire où l'image sera stocké

        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //Spécifie le chemin du fichier à télécharger

        $uploadOK = 1; //N'est pas encore utilisé (sera utilisé plus tard)

        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //contient l'extension du fichier

        //on vérifie que le fichier image est une image réelle
        if (isset($_POST["submit"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false){
                //Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000){
                    echo "Désolé, votre fichier est trop volumineux.";
                    $uploadOK = 0;
                }

                //All file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType !="gif" && $imageFileType !="webp"){
                    echo "Seuls les formats JPG, JPEG, PNGn WEBP & GIF files sont authorisé.";
                    $uploadOK = 0;
                }

                //Check if $uploadOK is set to 0 by an error
                if ($uploadOK == 0){
                    echo "Désolé, votre avatar n'a pu être envoyé.";
                    //if everything is ok, try to upload file
                }else{
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                        $imagesManager = new \Project\Models\ArticleManager();
                        $uploadImgArticles = $imagesManager->upImageArticle($id,$titre_img_articles, $target_file);
                        
                        // header('Location: indexAdmin.php?action=dashboard');
                        require 'app/views/back/dashboard.php';
                    }else{
                        echo "Désolé, une erreur est survenue dans l'envoi de votre fichier.";
                    }
                }
            }else{
                echo "Ce fichier n'est pas une image.";
                $uploadOK = 0;
            }
        }
    }
    



    // INFORMATION UTILISATEUR
    // Page : éditer les informations de l'utilisateur
    function editInfosUser($id_user){
        $infosUsersEdition = new \Project\Models\InformationsUsersManager();
        $infosUsersAdmin = $infosUsersEdition->infoUserEdition($id_user);
        
        require 'app/views/back/informationsUsers.php';

    }


    // Editer les informations de l'utilisateur dans la page informationsUsers.php
    function editUsersInfos($id_user, $pseudo, $lastname, $firstname, $email, $pass){
        $editinfosusers = new \Project\Models\InformationsUsersManager();
        $editinfos = $editinfosusers->editinfosuser($id_user, $pseudo, $lastname, $firstname, $email, $pass);

        header("Location: administration.php?action=editInfosUsers&id=$id_user");

    }


    // Supprimer le compte utilisateur
    function deletInfoUser($id){
        $deletInfUser = new \Project\Models\InformationsUsersManager();
        $deletInfoUsers = $deletInfUser->deletUserInfos($id);

        require 'app/views/front/accueil.php';
    }




    // GESTION ADMINISTRATEURS
    // Page : gestion des administrateurs
    function managementAdminAll($id_users){
        $Admins = new \Project\Models\ManagementAdminManager();
        $allAdmin = $Admins->allManagementAdmin($id_users);

        require 'app/views/back/managementAdmin.php';
    }


    // Supprimer un compte ADMIN
    function deletAdminManag($id){
        $deletAdminManag = new \Project\Models\ManagementAdminManager();
        $deletAdminMana = $deletAdminManag->deletAdminManagement($id);

        header("Location: administration.php?action=managementAdmin&id=$id");
    }


    // Page : éditer un compte ADMIN
    function adminEditionManag($id_user){
        $managementAdminEdition = new \Project\Models\ManagementAdminManager();
        $managementEditionAdmin = $managementAdminEdition->adminManagementEdition($id_user);
        
        require 'app/views/back/managementAdminEdit.php';

    }


    // Editer un compte ADMIN managementAdminEdit.php
    function editAdminsManagement($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers){
        $managementAdminsEdition = new \Project\Models\ManagementAdminManager();
        $managementEditionAdmins = $managementAdminsEdition->adminsManagementEdition($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers);

        header("Location: administration.php?action=managementAdmin&id=$id_users");

    }


    // Ajouter un compte ADMIN
    function createAdminsManagement($pseudo, $lastname, $firstname, $mail, $pass){
        $AdminManagement = new \Project\Models\ManagementAdminManager();
        $createAdminManag = $AdminManagement->createManagementAdmins($pseudo, $lastname, $firstname, $mail, $pass);

        header("Location: administration.php?action=managementAdmin");
    }
    



    // GESTION UTILISATEURS
    // Page : gestion des utilisateurs
    function managementUsersAll($id_users){
        $Users = new \Project\Models\ManagementUserManager();
        $allUser = $Users->allManagementUser($id_users);

        require 'app/views/back/managementUsers.php';
    }
    

    // Supprimer un compte USER
    function deletUserManag($id){
        $deletUserManag = new \Project\Models\ManagementUserManager();
        $deletUserMana = $deletUserManag->deletUserManagement($id);

        header("Location: administration.php?action=managementUsers&id=$id");
        // require 'app/views/front/accueil.php';
    }


    // Page : éditer un compte USER
    function userEditionManag($id_user){
        $managementUserEdition = new \Project\Models\ManagementUserManager();
        $managementEditionUser = $managementUserEdition->userManagementEdition($id_user);
        
        require 'app/views/back/managementUsersEdit.php';

    }


    // Editer un compte USER managementUserEdit.php
    function editUsersManagement($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers){
        $managementUsersEdition = new \Project\Models\ManagementUserManager();
        $managementEditionUsers = $managementUsersEdition->usersManagementEdition($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers);
        
        header("Location: administration.php?action=managementUsers&id=$id_users");

    }


    // Ajouter un compte USER
    function createUsersManagement($pseudo, $lastname, $firstname, $mail, $pass){
        $UserManagement = new \Project\Models\ManagementUserManager();
        $createUserManag = $UserManagement->createManagementUsers($pseudo, $lastname, $firstname, $mail, $pass);

        header('Location: administration.php?action=managementUsers');
    }
        



    // MESSAGERIE
    // Page Contactez-Nous !
    function MessagingForm(){
        $messaging = new \Project\Models\ContactFormManager();
        $allMessaging = $messaging->contactMessaging();

        require 'app/views/back/contactForm.php';
    }
    

    // Supprimer un message
    function deletContactMessage($id_contactform){
        $deletContactMessag = new \Project\Models\ContactFormManager();
        $deletContactMessaging = $deletContactMessag->deletMessaging($id_contactform);

        header('Location: administration.php?action=contactMessaging');
    }


    // PAGE D'ERREUR
    // Formulaire
    function erreurFormAdmin(){
        require 'app/views/back/erreurFormAdmin.php';
    }

    



}