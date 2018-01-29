<?php

    require_once 'config/global.php';
    require_once 'core/Controller.php';
    require_once 'core/Controller.front.func.php';

    if (isset($_GET['controller'])) {
        $controllerObj = loadControllers($_GET['controller']);
    } else {
        $controllerObj = loadControllers(CONTROLLER_DEFAULT);
    }
    
    launchAction($controllerObj);
