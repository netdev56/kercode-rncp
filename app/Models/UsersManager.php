<?php 

namespace Project\Models;

class UsersManager extends Manager{

    ///////BACK
    
    // Création des comptes utilisateurs - registrationFormUser.php
    public function createUser($pseudo, $lastname, $firstname, $mail, $pass){
        $bdd = $this->bdConnect();
        
        $createUsers = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, email, pass, roleusers) VALUE (?, ?, ?, ?, ?, "user")');
        $createUsers->execute(array($pseudo, $lastname, $firstname, $mail, $pass));

        return $createUsers;

    }

    
    // Création des comptes utilisateurs - Contrôle si le pseudo existe déjà
    public function voirPseudoExist($pseudo){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT pseudo FROM users WHERE pseudo = ?");
        $req->execute(array($pseudo));

        return $req;
    }


    // Création des comptes utilisateurs - Contrôle si l'email existe déjà
    public function voirEmailExist($email){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT email FROM users WHERE email = ?");
        $req->execute(array($email));

        return $req;
    }


    // Récupération du mail pour le formulaire de connexion
    public function recupInfosConnexion($mail){
        $bdd = $this->bdConnect();

        $reqInfos = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $reqInfos->execute(array($mail));

        return $reqInfos;
    }


}