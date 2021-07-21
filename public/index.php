<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\Core\Application;

$rootPath = dirname(__DIR__);

$app = new Application($rootPath);

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');
$app->router->post('/contact', function() {
    return 'Handling POST data';
});

$app->run();