<?php

namespace app\models;

use app\container\Model;

class Books extends Model
{
    public function all()
    {
        return $this->db->queryWithResult('SELECT * FROM books');
    }

    public function authors()
    {
        return $this->db->queryWithResult('SELECT * FROM authors');
    }
}