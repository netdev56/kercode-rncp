<?php 

namespace Project\Models;

use Exception;

class Manager {

    ///////BACK
    
    protected function bdConnect(){
        try{
            // Pour installer la base de donnée en local ou serveur, il faut mettre votre crédentials ci-dessous 
            $bdd = new \PDO('mysql:host=localhost;dbname=projet-final;charset=utf8', 'root', '');
            return $bdd;
        }catch(Exception $e){ //Affiche un message d'erreur en cas de problème de connexion à la base de donnée
            die('Erreur: ' . $e->getMessage());
        }
    }

}