<?php

use app\src\router\Router;

require __DIR__. '/../vendor/autoload.php';

$router = new Router($_SERVER['REQUEST_URI']);

$router->get('/', function() { echo 'Homepage'; });
$router->get('/posts', function() { echo 'Tous les articles'; });
$router->get('/posts/:id-:slug', function($id, $slug) { 
    echo 'Article '. $slug . ':' . $id; 
})->with('id', '[0-9]+')->with('slug', '([a-z\-0-9]+)');
$router->get('/posts/:id', function($id) { 
?>

    <form action="" method="post">
        <input type="text" name="name">
        <button type="submit">Send</button>
    </form>

<?php
});

$router->post('/posts/:id', function($id) { echo 'Poster pour l\'article ' . $id . '<pre>' . print_r($_POST, true) . '</pre>'; });

$router->run();

// 34:17