<?php

namespace Project\Models;


use Exception;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class Manager {

    ///////BACK
    
    protected function bdConnect(){

        // Variable d'environnement
        $db_host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_NAME'];
        $db_user = $_ENV['DB_USER'];
        $db_pass = $_ENV['DB_PASS'];


        try{

            $bdd = new \PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
            return $bdd;

        }catch(Exception $e){ //Affiche un message d'erreur en cas de problème de connexion à la base de donnée

            die('Erreur: ' . $e->getMessage());
        }
    }

}


// class Manager {

//     ///////BACK
    
//     protected function bdConnect(){
//         try{
//             // Pour installer la base de donnée en local ou serveur, il faut mettre votre crédentials ci-dessous 
//             $bdd = new \PDO('mysql:host=localhost;dbname=projet-final;charset=utf8', 'root', '');
//             return $bdd;
//         }catch(Exception $e){ //Affiche un message d'erreur en cas de problème de connexion à la base de donnée
//             die('Erreur: ' . $e->getMessage());
//         }
//     }

// }