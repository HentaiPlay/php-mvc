<?php

namespace app\models;

use app\container\Model;

class Authors extends Model
{
    public function all()
    {
        return $this->db->queryWithResult('SELECT * FROM authors');
    }
}