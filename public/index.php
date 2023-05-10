<?php

use app\core\Application;
use app\controllers\CategoryController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

// $router = new Router();
$app->router->get('/', function(){
    return 'Hello world';
});

$app->router->get('/category', [CategoryController::class, 'category']);
$app->router->post('/category/add', [CategoryController::class, 'addCategory']);
$app->router->post('/category/copy', [CategoryController::class, 'copyCategory']);
$app->router->post('/category/edit', [CategoryController::class, 'editCategory']);

$app->run();