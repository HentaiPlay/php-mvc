<?php

namespace app\controllers;

use app\container\Controller;

class BooksController extends Controller
{
    public function index()
    {
        $books = $this->model->all();
        $authors = $this->model->authors();
        $result['authors'] = $authors;
        $result['books'] = $books;
        $this->view->render($result);
    }

    public function add()
    {
        $name = $_POST['book'];
        $author = $_POST['author'];
        $this->model->db->query('INSERT INTO books SET name="'.$name.'"');
        $this->model->db->query('INSERT INTO authors_books SET book_id = (SELECT id FROM books WHERE name="'.$name.'"), author_id = '.$author.'');
        header('Location: /books');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->model->db->query('DELETE FROM authors_books WHERE book_id='.$id.'');
        $this->model->db->query('DELETE FROM books WHERE id='.$id.'');
        header('Location: /books');
    }
}