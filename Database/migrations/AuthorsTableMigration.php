<?php

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;

class AuthorsTableMigration
{
    public static function run(): void
    {
        $schema = ConnectionManager::schema();

        if (!$schema->hasTable('authors')) {
            $schema->create('authors', function (Blueprint $table): void {
                $table->increments('id');
                $table->string('firstName', 32);
                $table->string('lastName', 32);
                $table->date('birthDate');
            });
        }
    }
}
