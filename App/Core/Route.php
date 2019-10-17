<?php
namespace App\Core;
use App\Controllers;

class Route
{
    static function start()
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1]))
        {
            $controller_name = $routes[1];
        }

        if (!empty($routes[2]))
        {
            $action_name = $routes[2];
        }


        //$model_name = 'Model_'.$controller_name;
        $controller_name ='App\\Controllers\\' . 'Contr_'.$controller_name;
        $action_name = 'action_'.$action_name;

        print_r($controller_name);
        print_r($action_name);

        $controller = new $controller_name ();
        $action = $action_name;

        $controller->$action();

    }
}
