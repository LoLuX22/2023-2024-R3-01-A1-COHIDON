<?php
require_once("controllers/MainController.php");
require_once("controllers/PokemonController.php");
require_once("controllers/Router/Route/RouteIndex.php");
require_once("controllers/Router/Route/RouteAddPokemon.php");
require_once("controllers/Router/Route/RouteSearch.php");
require_once("controllers/Router/Route/RouteAddType.php");


class Router{
    private array $routeList;

    private array $crtlList;

    private string $action_key;


    public function __construct($name_of_action_key = "action")
    {
        $this->createControllerList();
        $this->createRouteList();
        $this->action_key = $name_of_action_key;
    }

    private function createControllerList()
    {
        $this->crtlList = [];
        $this->crtlList["main"] = new MainController();
        $this->crtlList["pokemon"] = new PokemonController();
    }

    private function createRouteList()
    {
        $this->routeList = [];
        $this->routeList["Index"] = new RouteIndex($this->crtlList["main"]);
        $this->routeList["AddPokemon"] = new RouteAddPokemon($this->crtlList["pokemon"]);
        $this->routeList["Search"] = new RouteSearch($this->crtlList["main"]);
        $this->routeList["AddType"] = new RouteAddType($this->crtlList["pokemon"]);
    }

    public function routing($get, $post) {
        // Check if the action key is in the GET data
        if (isset($get[$this->action_key])) {
            // Get the action from the GET data
            $action = $get[$this->action_key];

            // Get the route from the route list   
            $route = $this->routeList[$action];

            // Check if the route exists
            if (!$route) {
                throw new Exception("Route not found for action: " . $action);
            }

            // Call the action
            if (!empty($post)) {
                $route->action($post, 'POST');
            } else {
                $route->action([], 'GET');
            }
        }
    }
}