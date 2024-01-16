<?php
require_once("controllers/MainController.php");
require_once("controllers/Router/Route.php");

class RouteAddType extends Route
{

    private PokemonController $controller;

    /**
     * @param PokemonController $controller
     * Constructeur de la classe RouteAddType
     */

    public function __construct(PokemonController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get(array $params = [])
    {
        $this->controller->displayAddType();        
    }

    public function post(array $params = [])
    {
        $this->controller->displayAddType();
    }

}