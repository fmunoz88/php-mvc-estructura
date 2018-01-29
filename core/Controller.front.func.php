<?php 

    function loadControllers($controller)
    {
        $controller = ucwords($controller).'Controller';
        $strFileController = 'controllers/'.$controller.'.php';
        
        if (!is_file($strFileController)) {
            $strFileController = 'controllers/'.ucwords(CONTROLLER_DEFAULT).'Controller.php';
        }
        
        require_once $strFileController;
        $controllerObj = new $controller;
        
        return $controllerObj;
    }
    
    function loadAction($controllerObj, $action)
    {
        $controllerObj->$action();
    }

    function launchAction($controllerObj)
    {
        if (isset($_GET['action']) && method_exists($controllerObj, $_GET['action'])) {
            loadAction($controllerObj, $_GET['action']);
        } else {
            loadAction($controllerObj, ACTION_DEFAULT);
        }
    }
