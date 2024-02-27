<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;
use App\Entity\Test;

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

if (!$schema->hasTable('test')) {
    $schema->create('test', function (Blueprint $table): void {
        $table->increments('id');
        $table->string('name', 32);
    });
}

if (!$schema->hasTable('authors')) {
    $schema->create('authors', function (Blueprint $table): void {
        $table->increments('id');
        $table->string('firstName', 32);
        $table->string('lastName', 32);
        $table->date('birthDate');
    });
}

