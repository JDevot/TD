<?php

ob_start();

$controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';
$file_controller = $controller . 'Controller.php';

if(file_exists('controllers/' . $file_controller)){
    require 'controllers/' . $controller . 'Controller.php';

    $action = !empty($_GET['action']) ? $_GET['action'] : 'index';

    // On execute l'action
    if(function_exists($action)){
        $action();
    }else{
        echo 'Action ' . $action . ' of ' . $file_controller.' not exist';
    }

}else{
    echo 'Controller ' . $controller . ' not exist';
}

$body = ob_get_clean();
require 'views/base.php';


