<?php

namespace app\container\db;

use mysqli;

class DataBase
{
    public $db;

    /**
     * Connect to DataBase
     */

    public function __construct()
    {
        $config = require('../app/container/src/db_config.php');
        $this->db = new mysqli($config['host'], $config['user'], $config['password'], $config['name']);

        if ($this->db->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully";
    }

    /**
     * @param string
     * @return array 
     */

    public function queryWithResult($sql)
    {
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

}