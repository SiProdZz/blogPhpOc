<?php

namespace Blog\Projet\Model;

class Manager
{
    
     protected function connexion()
    {
        try
        {
            $db = new \PDO('mysql:host=localhost;dbname=billetalaska;charset=utf8', 'root', '');
             /*$db = new \PDO('mysql:host=localhost;dbname=id6283130_unbilletsimplepourlalaska','id6283130_jeanforteroche','jeanforteroche');*/
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
        return $db;
    }
}
