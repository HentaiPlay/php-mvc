<?php

namespace app\container;

class Router
{
    protected $params = [];

    /**
     * @return boolean
     */

    public function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $routes = require('../app/container/src/routes.php');

        foreach($routes as $route => $params)
        {
            $route = '#^'.$route.'$#';
            if(preg_match($route, $url))
            {
                $this->route = $route;
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run()
    {
        if($this->match())
        {
            $param = ucfirst($this->params['controller']);
            $path = 'app\controllers\\'.$param.'Controller';
            if(class_exists($path))
            {
                $method = $this->params['method'];
                if(method_exists($path, $method))
                {
                    $controller = new $path($this->params);
                    $controller->$method();
                } else {
                    echo 'такого метода нет';
                }
            } else {
                echo 'такого класса нет';
            }
        } else {
            echo 'такого маршрута нет';
        }
    }
}