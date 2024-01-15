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

            foreach ($donnees as $ligne) {
                $pokemon = new Pokemon(
                    $ligne['idPokemon'],
                    $ligne['nomEspece'],
                    $ligne['description'],
                    $ligne['typeOne'],
                    $ligne['typeTwo'],
                    $ligne['urlImg']
                );
                $pokemons[] = $pokemon;
            }

            return $pokemons; // Retourne le tableau de pokemons
        }

        public function getById(int $idPokemon):?Pokemon
        {
            try
            {
                $sql = "SELECT * FROM pokemon WHERE idPokemon = ?";
                $res = $this->execRequest($sql,[$idPokemon]);
                $lines = $res->fetch(PDO::FETCH_ASSOC);
                if ($lines != null)
                {
                    $pokemon = new Pokemon(
                        $lines['idPokemon'],
                        $lines['nomEspece'],
                        $lines['description'],
                        $lines['typeOne'],
                        $lines['typeTwo'],
                        $lines['urlImg']
                    );
                    
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