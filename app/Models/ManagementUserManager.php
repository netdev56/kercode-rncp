<?php

namespace Project\Models;

class ManagementUserManager extends Manager{

    ///////BACK
    
    // Page : gestion des USER
    public function allManagementUser($id_users){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT *, DATE_FORMAT(dateinscription, '%d/%m/%Y') AS dateUserManager FROM users WHERE roleusers = 'user' ORDER BY id DESC");
        $req->execute(array($id_users));

        return $req;
    }
    

    // Supprimer le compte utilisateur
    public function deletUserManagement($id){
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("DELETE FROM users WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }
    

    // Page éditer un USER
    public function userManagementEdition($id_user){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT *, DATE_FORMAT(dateinscription, '%d/%m/%Y') AS dateUserManagerEdit FROM users WHERE id = ?");
        $req->execute(array($id_user));

        return $req;
    }
    

    // Editer un compte USER managementUserEdit.php
    public function usersManagementEdition($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers){
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("UPDATE users SET pseudo = :pseudo, lastname = :lastname, firstname = :firstname, email = :email, pass = :pass, roleusers = :roleusers WHERE id = :id");
        $req->execute([
            'id' => $id_users,
            'pseudo' => $pseudo,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'pass' => $pass,
            'roleusers' => $roleusers
        ]);
        
        return $req;
    }
    

    // Ajouter un compte USER
    public function createManagementUsers($pseudo, $lastname, $firstname, $mail, $pass){
        $bdd = $this->bdConnect();
        
        $createUserManagement = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, email, pass, roleusers) VALUE (?, ?, ?, ?, ?, "user")');
        $createUserManagement->execute(array($pseudo, $lastname, $firstname, $mail, $pass));

        return $createUserManagement;

    }


    // Ajouter un compte USER - Contrôle si le pseudo existe déjà
    public function voirPseudoExistUser($pseudo){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT pseudo FROM users WHERE pseudo = ?");
        $req->execute(array($pseudo));

        return $req;
    }


    // Ajouter un compte USER - Contrôle si l'email existe déjà
    public function voirEmailExistUser($email){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT email FROM users WHERE email = ?");
        $req->execute(array($email));

        return $req;
    }


    // Page : éditer mot de passe d'un compte USER
    public function allManagementUserMdp($id_users){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT id, pass FROM users WHERE id = ?");
        $req->execute(array($id_users));

        return $req;
    }


    // Editer mot de passe d'un compte USER
    public function usersManagementEditionMdp($id_users, $pass){
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("UPDATE users SET pass = :pass WHERE id = :id");
        $req->execute([
            'id' => $id_users,
            'pass' => $pass
        ]);
        
        return $req;
    }


}