<?php 
require_once "views\View.php";
require_once "models/PokemonManager.php";

    // Classe MainController
    class MainController{
        // Fonction Index
        public function Index() : void 
        {
            $indexView = new View('Index');

            // Création d'un objet PokemonManager
            $pokemonManager = new PokemonManager();
            $listManager = $pokemonManager->getAll();
            // Récupération de tous les pokemons
            $first = $pokemonManager->getById(1);
            $other = $pokemonManager->getById(8);
            // Génération de la vue Index
            $indexView->generer([
                'nomDresseur' => "Red",
                'listManager' => $listManager,
                'first' => $first,
                'other' => $other]);
        }
}
?>

