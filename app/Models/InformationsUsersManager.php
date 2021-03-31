<?php

namespace Project\Models;

class InformationsUsersManager extends Manager{

    ///////BACK

    // Page éditer un commentaire dans le Guestbook
    public function infoUserEdition($id_user){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT * FROM users WHERE id = ?");
        $req->execute(array($id_user));

        return $req;
    }


    // Editer les informations de l'utilisateur dans la page informationsUsers.php
    public function editinfosuser($id_user, $pseudo, $lastname, $firstname, $email, $pass){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("UPDATE users SET pseudo = :pseudo, lastname = :lastname, firstname = :firstname, email = :email, pass = :pass WHERE id = :id");
        $req->execute([
            'id' => $id_user,
            'pseudo' => $pseudo,
            'lastname' => $lastname,
            'firstname' => $firstname,
            'email' => $email,
            'pass' => $pass
        ]);

        return $req;
    }


    // Supprimer le compte utilisateur
    public function deletUserInfos($id){
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("DELETE FROM users WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }




}