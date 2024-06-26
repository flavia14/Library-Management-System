<?php

declare(strict_types=1);

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;

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

if (!$schema->hasTable('migration_history')) {
    $schema->create('migration_history', function (Blueprint $table) {
        $table->increments('id');
        $table->string('migration_name');
        $table->dateTime('date');
        $table->timestamps();
    });
}

include_once 'MigrationRunner.php';
