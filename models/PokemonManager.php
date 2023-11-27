<?php 
    require_once 'models/Model.php'; 
    require_once 'models/Pokemon.php'; 

    /**
     * Classe PokemonManager
     * Gère les interactions avec la base de données
     */
    class PokemonManager extends Model //hérite de Model
    {
        /**
         * Renvoie la liste des pokemons
         * @return array la liste des pokemons
         */
        public function getAll(): array 
        {
            $sql = 'SELECT * FROM pokemon'; // Requête SQL
            $pokemons = array(); 
            $res = $this->execRequest($sql); // exécution de la requête SQL
            while ($donnees = $res->fetch(PDO::FETCH_ASSOC)) // Récupération des résultats ligne par ligne
            {
                $pokemons[] = new Pokemon($donnees); // Création d'un objet Pokemon et ajout dans un tableau
            }
            return $pokemons; // Retourne le tableau
        }

       
    }    
          
?>