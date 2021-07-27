<?php

require_once __DIR__ .'/vendor/autoload.php';

use App\Core\Application;

$rootPath = __DIR__;
$dotenv = Dotenv\Dotenv::createImmutable($rootPath);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

$app = new Application($rootPath, $config);
$app->db->applyMigrations();