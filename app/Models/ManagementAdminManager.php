<?php

namespace Project\Models;

class ManagementAdminManager extends Manager{

    ///////BACK
    
    // Page : gestion des administrateurs
    public function allManagementAdmin($id_users){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT *, DATE_FORMAT(dateinscription, '%d/%m/%Y') AS dateAdminManager FROM users WHERE roleusers = 'admin' ORDER BY id DESC");
        $req->execute(array($id_users));

        return $req;
    }


    // Supprimer le compte administrateur
    public function deletAdminManagement($id){
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("DELETE FROM users WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }


    // Page éditer un ADMIN
    public function adminManagementEdition($id_user){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT *, DATE_FORMAT(dateinscription, '%d/%m/%Y') AS dateAdminManagerEdit FROM users WHERE id = ?");
        $req->execute(array($id_user));

        return $req;
    }


    // Editer un compte ADMIN managementAdminEdit.php
    public function adminsManagementEdition($id_users, $pseudo, $lastname, $firstname, $email, $pass, $roleusers){
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


    // Ajouter un compte ADMIN
    public function createManagementAdmins($pseudo, $lastname, $firstname, $mail, $pass){
        $bdd = $this->bdConnect();
        
        $createAdminManagement = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, email, pass, roleusers) VALUE (?, ?, ?, ?, ?, "admin")');
        $createAdminManagement->execute(array($pseudo, $lastname, $firstname, $mail, $pass));

        return $createAdminManagement;
    }


    // Page : éditer mot de passe d'un compte ADMIN
    public function managementAdminEditMdpEdition($id_user){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT id, pass FROM users WHERE id = ?");
        $req->execute(array($id_user));

        return $req;
    }


    // Editer un compte ADMIN managementAdminEdit.php
    public function adminsManagementEditionMdp($id_users, $pass){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("UPDATE users SET pass = :pass WHERE id = :id");
        $req->execute([
            'id' => $id_users,
            'pass' => $pass
        ]);

        return $req;
    }




}