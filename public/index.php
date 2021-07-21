<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\Core\Application;
use App\Controllers\{
    SiteController,
    AuthController,
};

$rootPath = dirname(__DIR__);

$app = new Application($rootPath);

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'storeContact']);

$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->run();