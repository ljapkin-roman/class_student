<?php
namespace App\Core;
use App\Controllers;

class Route
{
    private static function getParam($query)
    {
        $parts = explode('&', $query);
        $result = [];
        foreach ($parts as $item) {
            $chunk = explode('=', $item);
            $result[$chunk['0']] = $chunk[1];
        }
        return $result;
    }

    static function start()
    {
        $url = parse_url($_SERVER['REQUEST_URI']);
        $routes = explode('/', $url['path']);

        if (isset($url['query'])) {
            $query = self::getParam($url['query']);
        }


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


        $controller = new $controller_name ();
        $action = $action_name;

        $controller->$action($query);

    }
}
