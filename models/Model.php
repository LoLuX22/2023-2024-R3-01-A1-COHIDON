<?php

// Classe abstraite Model
abstract class Model {

    // Objet PDO d'accès à la BD
    private $db;

    //instancie la connexion à la base de données
    protected function execRequest(string $sql, array $params = null): PDOStatement|false //retourne un objet PDOStatement ou false
    {
        //Si pas de paramètres
        $res = false;

        //Sans paramètres
        if ($params === null) 
        {
            $res = $this->getDB()->query($sql); // exécution directe
        }
        //Avec paramètres
        else 
        {
            $res = $this->getDB()->prepare($sql); // requête préparée
            $res->execute($params); // exécution de la requête préparée
        }
        //retourne le résultat
        return $res;
    }
    {
        //Si pas de paramètres
        $res = false;

        //Sans paramètres
        if ($params === null) 
        {
            $res = $this->getDB()->query($sql); // exécution directe
        }
        //Avec paramètres
        else 
        {
            $res = $this->getDB()->prepare($sql); // requête préparée
            $res->execute($params); // exécution de la requête préparée
        }
        //retourne le résultat
        return $res;
    }
}