<?php
require_once("controllers/MainController.php");
require_once("controllers/Router/Route.php");

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
        $this->controller->index();
    }

    public function post(array $params = [])
    {
        $this->controller->index();
    }
}