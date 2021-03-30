<?php 

namespace Project\Models;

class UsersManager extends Manager{

    ///////FRONT






    ///////BACK
    
    // Création des comptes utilisateurs - registrationFormUser.php
    public function createUser($pseudo, $lastname, $firstname, $mail, $pass){
        $bdd = $this->bdConnect();
        $createUsers = $bdd->prepare('INSERT INTO users(pseudo, lastname, firstname, email, pass, roleusers) VALUE (?, ?, ?, ?, ?, "user")');
        $createUsers->execute(array($pseudo, $lastname, $firstname, $mail, $pass));
        return $createUsers;

    }


    // Récupération du mail pour le formulaire de connexion
    public function recupInfosConnexion($mail){
        $bdd = $this->bdConnect();
        $reqInfos = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $reqInfos->execute(array($mail));

        return $reqInfos;
    }

    
}