<?php

namespace app\container;

class View
{
    public $path;
    public $params;

    public function __construct($params)
    {
        $this->params = $params;
        $this->path = $params['controller'].'/'.$params['method'];
    }

    /**
     * @param array
     */
    public function render($vars = [])
    {
        extract($vars);
        ob_start();
        require('../app/views/'.$this->path.'.php');
        $content = ob_get_clean();
        require('../app/views/layaout.php');
    }
}