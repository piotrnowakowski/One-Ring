<?php
require_once 'src/controllers/DefaultController.php';
class Routing{
    public static $routes;

    public static function get($url, $controller)
    {
        self::$routes[$url] = $controller;
    }

    public static function run($url)
    {
        $action = explode("/", $url)[0];
        # wydzielam sobie nazwę według separatora

        if(!array_key_exists($action, self::$routes))
        {
            die("Wrong url");
        }

        #TODO call controller method 
        $controller = self::$routes[$action];
        $object = new $controller;
        $action = $action ?: 'index';
        $object->$action();

    }
}