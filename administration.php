<?php 

session_start();

//Prend les informations du fichier autoload.php
require_once __DIR__ . '/vendor/autoload.php';


try{

    $backController = new \Project\Controllers\Back\BackController();

    if(isset($_SESSION['id'])){

        if(isset($_GET['action'])){

            // DASHBOARD
            // Accès Dashbaord
            if($_GET['action'] == 'dashboard'){
                $backController->dashboard();
            }

            // Deconnexion Dashboard
            elseif($_GET['action'] == 'deconnexionDashboard'){
                session_destroy();
                header('Location: index.php');
            }



            // LIVRE D'OR
            // Affichage des commentaires du livre d'or USER
            elseif($_GET['action'] == 'guestbook'){
                $id = $_GET['id'];
                $backController->guestbook($id);
            }

            // Ajouter un commentaire dans le Guestbook
            elseif($_GET['action'] == 'createComments'){
                $is_user = $_SESSION['id'] ;
                $comments = htmlspecialchars($_POST['comments']);
            
                // Vérifie que les champs sont remplis
                if(!empty($comments)){
                    $backController->createComment($comments, $is_user);
                }else{
                    throw new Exception('Le champ n\'est pas remplis');
                }

            }

            // Page éditer un commentaire dans le Guestbook
            elseif($_GET['action'] == 'commentEdition'){
                $id_guestbooks = $_GET['id'];
                $backController->commentsEdition($id_guestbooks);
            }

            // Editer le commentaire dans la page guestbookEditComment.php
            elseif($_GET['action'] == 'editComments'){ 
                $id_editComments = $_GET['id'];
                $edComments = htmlspecialchars($_POST['comments']);
                
                // Vérifie que le champ soit rempli
                if(!empty($edComments)){
                    $backController->editCommentsGuestbook($id_editComments, $edComments);
                }else{
                    throw new Exception('Le champ n\'est pas remplis');
                }

            }

            // Supprimer un commentaire du livre d'or
            elseif($_GET['action'] == 'deletComment'){
                $id = $_GET['id'];
                $backController->deletComment($id);
            }



            // INFORMATION UTILISATEUR
            // Page : éditer les informations de l'utilisateur
            elseif($_GET['action'] == 'editInfosUsers'){
                $id_user = $_GET['id'];
                $backController->editInfosUser($id_user);
            }

            // Editer les informations de l'utilisateur
            elseif($_GET['action'] == 'editInformationsUsers'){ 
                $id_user = $_GET['id'];
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $lastname = htmlspecialchars($_POST['lastname']);
                $firstname = htmlspecialchars($_POST['firstname']);
                $email = htmlspecialchars($_POST['email']);

                // Vérifie que le champ soit rempli
                if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($email))))){
                    $backController->editUsersInfos($id_user, $pseudo, $lastname, $firstname, $email);
                }else{
                    throw new Exception('Le champ n\'est pas remplis');
                }

            }

            // Supprimer le compte utilisateur
            elseif($_GET['action'] == 'deletInfosUser'){
                $id = $_GET['id'];
                $backController->deletInfoUser($id);
            }

            // Page : modifier le mot de passe
            elseif($_GET['action'] == 'informationsUsersMdp'){
                $id_user = $_GET['id'];
                $backController->informationsUsersMdp($id_user);
            }

            // Editer le mot de passe
            elseif($_GET['action'] == 'editInformationsUsersMdp'){ 
                $id_user = $_GET['id'];
                $pass = htmlspecialchars($_POST['pass']);

                // Sécurise le mot de passe avec un hachage
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                
                // Vérifie que le champ soit rempli
                if(!empty($pass)){
                    $backController->editUsersInfosMdp($id_user, $pass);
                }else{
                    throw new Exception('Le champ n\'est pas remplis');
                }

            } 



                // Accessible uniquement au rôle ADMIN
                elseif ($_SESSION["roleusers"] == 'admin'){
            
                    // LIVRE D'OR
                    // Affichage des commentaires du livre d'or ADMIN
                    if($_GET['action'] == 'guestbookAdmin'){
                        $id = $_GET['id'];
                        $backController->guestbookAdmin($id);
                    }



                    // ACTUALITES
                    // Page articles d'actualités ADMIN
                    elseif($_GET['action'] == 'actualitesAdmin'){
                        $backController->adminArticles();
                    }

                    // Supprimer un articles d'actualités ADMIN
                    elseif($_GET['action'] == 'deletArticleAdmin'){
                        $id = $_GET['id'];
                        $backController->deletArticleAdmin($id);
                    }

                    // Page éditer un article d'actualités ADMIN
                    elseif($_GET['action'] == 'articleAdminEdition'){
                        $id = $_GET['id'];
                        $backController->editArticleAdmin($id);
                    }

                    // Editer un article d'actualités ADMIN
                    elseif($_GET['action'] == 'updateArticleAdmin'){ 
                        $id = $_GET['id'];
                        $title = htmlspecialchars($_POST['title']);
                        $content = htmlspecialchars($_POST['content']);
                        $description_articles = htmlspecialchars($_POST['description_articles']);

                        // Vérifie que les champs sont remplis
                        if(!empty($title) && (!empty($content) && (!empty($description_articles)))){
                            $backController->editUpdateArticleAdmin($id, $title, $content, $description_articles);
                        }else{
                            throw new Exception('Tous les champs ne sont pas remplis');
                        }

                    }

                    // Ajouter un article d'actualités ADMIN    
                    elseif($_GET['action'] == 'createArticlesAdmin'){
                        $id_user = $_SESSION['id'] ;
                        $title = htmlspecialchars($_POST['title']);
                        $content = htmlspecialchars($_POST['content']);
                        $description_articles = htmlspecialchars($_POST['description_articles']);

                        // Vérifie que les champs sont remplis
                        if(!empty($title) && (!empty($content) && (!empty($description_articles)))){

                            $backController->createArticleAdmin($title, $content, $description_articles, $id_user);
                        }else{
                            throw new Exception('Tous les champs ne sont pas remplis');
                        }

                    }

                    // Page Image articles d'actualités ADMIN
                    elseif($_GET['action'] == 'articleImgAdminEdition'){
                        $id = $_GET['id'];
                        $backController->adminImgArticles($id);
                    }

                    // Editer une Image articles d'actualités ADMIN
                    elseif($_GET['action'] == 'updateImageArticle'){
                        $id = $_GET['id'];
                        $titre_img_articles = htmlspecialchars($_POST['titre_img_articles']);
                        if(!empty($titre_img_articles)){
                            $backController->updateImagesArticle($id, $titre_img_articles);
                        }
                    }



                    // GESTION ADMINISTRATEURS
                    // Page : gestion des administrateurs
                    elseif($_GET['action'] == 'managementAdmin'){
                        $id_users = $_GET['id'];
                        $backController->managementAdminAll($id_users);
                    }

                    // Supprimer un compte ADMIN
                    elseif($_GET['action'] == 'deletAdminManagement'){
                        $id = $_GET['id'];
                        $backController->deletAdminManag($id);
                    }

                    // Page : éditer un compte ADMIN
                    elseif($_GET['action'] == 'adminEditionManagement'){
                        $id_user = $_GET['id'];
                        $backController->adminEditionManag($id_user);
                    }

                    // Editer un compte ADMIN managementAdminEdit.php
                    elseif($_GET['action'] == 'editManagementAdmin'){ 
                        $id_users = $_GET['id'];
                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $firstname = htmlspecialchars($_POST['firstname']);
                        $email = htmlspecialchars($_POST['email']);
                        $roleusers = $_POST['roleusers'];

                        // Vérifie que le champ soit rempli
                        if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($email))))){
                            $backController->editAdminsManagement($id_users, $pseudo, $lastname, $firstname, $email, $roleusers);
                        }else{
                            throw new Exception('Le champ n\'est pas remplis');
                        }

                    }

                    // Ajouter un compte ADMIN
                    elseif($_GET['action'] == 'createAdminManagement'){
                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $firstname = htmlspecialchars($_POST['firstname']);
                        $mail = htmlspecialchars($_POST['mail']);
                        $pass = htmlspecialchars($_POST['pass']);
                

                        // Sécurise le mot de passe avec un hachage
                        $pass = password_hash($pass, PASSWORD_DEFAULT);

                        // Condition pour valider les champs
                        if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($mail) && (!empty($pass)))))){
                            $backController->createAdminsManagement($pseudo, $lastname, $firstname, $mail, $pass);
                        
                        }else{
                            throw new Exception('Renseigner vos informations');
                        }
                        
                    }

                    // Page : éditer mot de passe d'un compte ADMIN
                    elseif($_GET['action'] == 'managementAdminEditMdp'){
                        $id_user = $_GET['id'];
                        $backController->managementAdminEditMdp($id_user);
                    }

                    // Editer mot de passe d'un compte ADMIN
                    elseif($_GET['action'] == 'editManagementAdminMdp'){ 
                        $id_users = $_GET['id'];
                        $pass = htmlspecialchars($_POST['pass']);

                        // Sécurise le mot de passe avec un hachage
                        $pass = password_hash($pass, PASSWORD_DEFAULT);
                        
                        // Vérifie que le champ soit rempli
                        if(!empty($pass)){
                            $backController->editAdminsManagementMdp($id_users, $pass);
                        }else{
                            throw new Exception('Le champ n\'est pas remplis');
                        }

                    }
                    


                    // GESTION UTILISATEURS
                    // Page : gestion des utilisateurs
                    elseif($_GET['action'] == 'managementUsers'){
                        $id_users = $_GET['id'];
                        $backController->managementUsersAll($id_users);
                    }

                    // Supprimer un compte USER
                    elseif($_GET['action'] == 'deletUserManagement'){
                        $id = $_GET['id'];
                        $backController->deletUserManag($id);
                    }
            
                    // Page : éditer un compte USER
                    elseif($_GET['action'] == 'userEditionManagement'){
                        $id_user = $_GET['id'];
                        $backController->userEditionManag($id_user);
                    }
                    
                    // Editer un compte USER managementUsersEdit.php
                    elseif($_GET['action'] == 'editManagementUser'){ 
                        $id_users = $_GET['id'];
                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $firstname = htmlspecialchars($_POST['firstname']);
                        $email = htmlspecialchars($_POST['email']);
                        $roleusers = $_POST['roleusers'];

                        // Vérifie que le champ soit rempli
                        if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($email))))){
                            $backController->editUsersManagement($id_users, $pseudo, $lastname, $firstname, $email, $roleusers);
                        }else{
                            throw new Exception('Le champ n\'est pas remplis');
                        }

                    }
                    
                    // Ajouter un compte USER
                    elseif($_GET['action'] == 'createUserManagement'){
                        $pseudo = htmlspecialchars($_POST['pseudo']);
                        $lastname = htmlspecialchars($_POST['lastname']);
                        $firstname = htmlspecialchars($_POST['firstname']);
                        $mail = htmlspecialchars($_POST['mail']);
                        $pass = htmlspecialchars($_POST['pass']);
                

                        // Sécurise le mot de passe avec un hachage
                        $pass = password_hash($pass, PASSWORD_DEFAULT);

                        // Condition pour valider les champs
                        if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($mail) && (!empty($pass)))))){
                            $backController->createUsersManagement($pseudo, $lastname, $firstname, $mail, $pass);
                        
                        }else{
                            throw new Exception('Renseigner vos informations');
                        }
                        
                    }

                    // Page : éditer mot de passe d'un compte USER
                    elseif($_GET['action'] == 'managementUsersEditMdp'){
                        $id_users = $_GET['id'];
                        $backController->managementUsersAllMdp($id_users);
                    }

                    // Editer mot de passe d'un compte USER
                    elseif($_GET['action'] == 'editManagementUserMdp'){ 
                        $id_users = $_GET['id'];
                        $pass = htmlspecialchars($_POST['pass']);

                        // Sécurise le mot de passe avec un hachage
                        $pass = password_hash($pass, PASSWORD_DEFAULT);
                        
                        // Vérifie que le champ soit rempli
                        if(!empty($pass)){
                            $backController->editUsersManagementMdp($id_users, $pass);
                        }else{
                            throw new Exception('Le champ n\'est pas remplis');
                        }

                    }
                            


                    // MESSAGERIE
                    // Page Contactez-Nous !
                    elseif($_GET['action'] == 'contactMessaging'){
                        $backController->MessagingForm();
                    }

                    // Supprimer un message
                    elseif($_GET['action'] == 'deletContactMessaging'){

                        $id_contactform = $_GET['id'];
                        $backController->deletContactMessage($id_contactform);
                    } 
                    
                    else {
                        session_destroy();
                        require "./app/views/front/404.php";
                    }

                }else {
                    session_destroy();
                    require "./app/views/front/404.php";
                }

        }


    }elseif(isset($_GET['action'])){

        // CONNEXION
        // Page de connexion Administration
        if($_GET['action'] == 'connexionAdministration'){
            $backController->connexionAdministration();
        }

        // Formulaire de connexion Administration
        elseif($_GET['action'] == 'connexionUser'){
            $mail = htmlspecialchars($_POST['mail']);
            $pass = htmlspecialchars($_POST['pass']);

            // Condition pour valider les champs
            if(!empty($mail) && !empty($pass)){
                $backController->connexionAdmin($mail, $pass);
            }else{
                throw new Exception('Renseigner votre Email & votre Mot de passe');
            }
          
        }



        // INSCRIPTION
        // Page d'inscription Utilisateur
        elseif($_GET['action'] == 'registrationFormUser'){
            $backController->registrationFormUser();
        }

        // Formulaire d'inscription Utilisateur
        elseif($_GET['action'] == 'createUsers'){
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $firstname = htmlspecialchars($_POST['firstname']);
            $mail = htmlspecialchars($_POST['mail']);
            $pass = htmlspecialchars($_POST['pass']);

            // Sécurise le mot de passe avec un hachage
            $pass = password_hash($pass, PASSWORD_DEFAULT);

            // Condition pour valider les champs
            if(!empty($pseudo) && (!empty($lastname) && (!empty($firstname) && (!empty($mail) && (!empty($pass)))))){
                $backController->createUser($pseudo, $lastname, $firstname, $mail, $pass);
                    
            }else{
                throw new Exception('Renseigner vos informations');
            }
                
        }else {
            session_destroy();
            require "./app/views/front/404.php";
        }


    }



}catch(Exception $e){ //En cas de problème sur l'action, il affiche un message d'erreur
    die('Erreur: ' . $e->getMessage());
}


