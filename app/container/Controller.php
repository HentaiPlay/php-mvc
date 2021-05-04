<?php

namespace app\container;

abstract class Controller
{
    public $params;
    public $view;
    public $model;

    public function __construct($params)
    {
        $this->params = $params;
        $this->view = new View($params);
        $this->model = $this->loadModel($params['controller']);
    }

    /**
     * Autoloader for Model class
     * @param string
     */

    public function loadModel($name)
    {
        $path = 'app\models\\'.ucfirst($name);
        if (class_exists($path))
        {
			return new $path;
		}
    }
}