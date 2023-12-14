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
            $donnees = $res->fetchAll(PDO::FETCH_ASSOC);
            return $donnees; // Retourne le tableau
        }

        public function getById(int $idPokemon):?Pokemon
        {
            try
            {
                $sql = "SELECT * FROM pokemon WHERE idPokemon = ?";
                $res = $this->execRequest($sql,array($idPokemon));
                $pokemon = $res->fetch(PDO::FETCH_ASSOC);
                $res -> closeCursor();
                if ($res != null)
                {
                    $pokemon = new Pokemon($pokemon['idPokemon'],$pokemon['nomEspece'],$pokemon['description'],$pokemon['typeOne'],$pokemon['typeTwo'],$pokemon['urlImg']);
                }
                else
                {
                    $pokemon = null;
                }
                return $pokemon;
            }
            catch (PDOException $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
        } 
    }            
?>