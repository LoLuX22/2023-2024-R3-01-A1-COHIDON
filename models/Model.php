<?php

/**
 * Classe abstraite Model
 * Centralise les services d'accès à une base de données.
 * Utilise l'API PDO de PHP
 */
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
    
    // Fonction permettant de se connecter à la base de données
    private function getDb() : PDO 
    {
        // Création de la connexion à la BD
        if ($this->db === null)  // Premier appel de la méthode : on crée la connexion
        try
        {
            $this->db = new PDO('mysql:host=localhost;dbname=pokemon;charset=utf8', 'root', ''); // Création de la connexion
        }
        return $this->db; // Renvoi de la connexion
    }
}