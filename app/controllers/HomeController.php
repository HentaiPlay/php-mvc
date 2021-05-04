<?php

namespace app\controllers;

use app\container\Controller;
use app\container\db\DataBase;

class HomeController extends Controller
{
    public function index()
    {
        $db = new DataBase;
        $result['items'] = $db->queryWithResult('SELECT authors_books.id, authors.name as author, books.name as book FROM authors_books LEFT JOIN authors ON (authors_books.author_id = authors.id) LEFT JOIN books ON (authors_books.id = books.id) ORDER BY id ASC');
        $this->view->render($result);
    }
}