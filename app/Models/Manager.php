<?php 

namespace Project\Models;

use Exception;

class Manager {

    ///////BACK
    
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=projet-final;charset=utf8', 'root', '');
            return $bdd;
        }catch(Exception $e){ //Affiche un message d'erreur en cas de problème de connexion à la base de donnée
            die('Erreur: ' . $e->getMessage());
        }
    }

}