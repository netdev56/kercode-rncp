<?php

namespace Project\Models;

class ContactFormManager extends Manager{

    ///////FRONT

    // Page Contactez-Nous ! - Envoi du formulaire
    public function contactForm($lastname, $email, $telephone, $message, $rgpdContacform){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare('INSERT INTO contactform(lastname_contactform, email_contactform, telephone_contactform, message_contactform, rgpd_contactform) VALUE(?, ?, ?, ?, ?)');
        $req->execute(array($lastname, $email, $telephone, $message, $rgpdContacform));
        return $req;
    }







    ///////BACK
    
    // Messagerie
    public function contactMessaging(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT * FROM contactform ORDER BY id_contactform DESC");
        return $req;
    }


    // Supprimer un message
    public function deletMessaging($id_contactform){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("DELETE FROM contactform WHERE id_contactform = ? ");
        $req->execute(array($id_contactform));

        return $req;
    }






    }