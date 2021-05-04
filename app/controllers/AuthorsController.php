<?php

namespace app\controllers;

use app\container\Controller;
use app\container\db\DataBase;

class AuthorsController extends Controller
{
    public function index()
    {
        $result = $this->model->all();
        $this->view->render($result);
    }

    public function add()
    {
        $name = $_POST['author'];
        $this->model->db->query('INSERT INTO authors SET name="'.$name.'"');
        header('Location: /authors');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->model->db->query('DELETE FROM authors WHERE id='.$id.'');
        header('Location: /authors');
    }
    
}