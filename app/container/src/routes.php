<?php

$routes = [
    '' => [
        'controller' => 'Home',
        'method'    => 'index'
    ],
    'authors' => [
        'controller' => 'Authors',
        'method'    => 'index'
    ],
    'authors/add' => [
        'controller' => 'Authors',
        'method'    => 'add'
    ],
    'authors/delete' => [
        'controller' => 'Authors',
        'method'    => 'delete'
    ],
    'books' => [
        'controller' => 'Books',
        'method'    => 'index'
    ],
    'books/add' => [
        'controller' => 'Books',
        'method'    => 'add'
    ],
    'books/delete' => [
        'controller' => 'Books',
        'method'    => 'delete'
    ]
];

return $routes;