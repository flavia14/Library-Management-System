<?php

$host = 'mysql';
$port = '3306';
$db = 'test';
$user = 'root';
$pass = 'root';

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $host,
    'host' => $host,
    'port' => $port,
    'database' => $db,
    'username' => $user,
    'password' => $pass,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

class User extends Illuminate\Database\Eloquent\Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = ['name', 'email'];

}


if (!Capsule::schema()->hasTable('users')) {
    Capsule::schema()->create('users', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('email');
    });
}

User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com',
]);

$users = User::all();
foreach ($users as $user) {
    echo $user->name . ' - ' . $user->email . '<br>';
}
