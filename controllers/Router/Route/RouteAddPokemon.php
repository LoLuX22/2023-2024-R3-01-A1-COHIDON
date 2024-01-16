<?php
require_once("controllers/MainController.php");
require_once("controllers/Router/Route.php");

class RouteAddPokemon extends Route
{

    private PokemonController $controller;

    /**
     * @param PokemonController $controller
     * Constructeur de la classe RouteAddPokemon
     */

    public function __construct(PokemonController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get(array $params = [])
    {
        
    }

    public function post(array $params = [])
    {
        $this->controller->displayAddPokemon();
    }

}