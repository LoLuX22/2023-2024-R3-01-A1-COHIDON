<?php 
    require_once 'controllers/MainController.php';
    require_once 'controllers/Router/Router.php';
    
    $router = new Router('action');
    session_start();
    if (isset($_GET['action'] )) {
        ob_clean();
    } else {
        $_GET['action'] = 'Index';
    }
    
    $router->routing($_GET, $_POST);
?>