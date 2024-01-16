<?php
require_once("contollers/MainController.php");
require_once("contollers/Router/Route/Route.php");

class RouteIndex extends Route
{

    private MainController $controller;

    /**
     * @param MainController $controller
     * Constructeur de la classe RouteIndex
     */

    public function __construct(MainController $controller)
    {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get(array $params = [])
    {
        $controller->index();
    }

    public function post(array $params = [])
    {
        $controller->index();
    }
}