<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as ConnectionManager;

$host = $_ENV['MARIADB_HOST'];
$db = $_ENV['MARIADB_DATABASE'];
$user = $_ENV['MARIADB_USER'];
$pass = $_ENV['MARIADB_PASS'];

$connectionManager = new ConnectionManager();

$connectionManager->addConnection([
    'driver' => 'mysql',
    'host' => $host,
    'database' => $db,
    'username' => $user,
    'password' => $pass,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$connectionManager->setAsGlobal();
$connectionManager->bootEloquent();

$schema = ConnectionManager::schema();

include_once '../command/MigrationRunner.php';
