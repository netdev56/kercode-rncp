<?php 

namespace Project\Models;

use Exception;

class Manager {

    ///////BACK
    
    //Affiche un message d'erreur en cas de problème de connexion à la base de donnée
    protected function bdConnect(){
        try{
            $bdd = new \PDO('mysql:host=localhost;dbname=projet-final;charset=utf8', 'root', '');
            return $bdd;
        }catch(Exception $e){
            die('Erreur: ' . $e->getMessage());
        }
    }

}