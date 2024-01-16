<?php
require_once("controllers/MainController.php");
require_once("controllers/Router/Route.php");

class RouteSearch extends Route
{

    private MainController $controller;

    /**
     * @param MainController $controller
     * Constructeur de la classe RouteSearch
     */

    public function __construct(MainController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }
    // Compare this snippet from controllers/Router/Route/RouteSearch.php:
    public function get(array $params = [])
    {
        $this->controller->displaySearch();
    }
    
    public function post(array $params = [])
    {

    }

}