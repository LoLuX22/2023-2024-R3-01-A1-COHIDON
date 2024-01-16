<?php
require_once "views/View.php";
require_once "Controllers/MainController.php";
require_once("models/PokemonManager.php");

class PokemonController{

    public function displayAddPokemon(?string $pokemon = null)
    {
        $addPokemonView = new View('AddPokemon');
        $addPokemonView->generer([
            'pokemon' => $pokemon
        ]);
    }

    public function displayAddType(?string $type = null)
    {
        $adTypeView = new View('AddType');
        $adTypeView->generer([
            'type' => $type
        ]);
    }

    public function displaySearch(?string $type = null)
    {
        $adSearchView = new View('Search');
        $adSearchView->generer([
            'search' => $search
        ]);
    }
}