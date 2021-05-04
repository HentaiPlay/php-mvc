<?php

namespace app\container;

use app\container\db\DataBase;

abstract class Model
{
    public $db;

    public function __construct()
    {
        $this->db = new DataBase;
    }
}