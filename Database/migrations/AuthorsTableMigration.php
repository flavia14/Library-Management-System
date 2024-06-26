<?php

declare(strict_types=1);

namespace migrations;

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;
use MigrationRunnerInterface;

class AuthorsTableMigration implements MigrationRunnerInterface
{
    public function run(): void
    {
        $schema = ConnectionManager::schema();

        if (!$schema->hasTable('authors')) {
            $schema->create('authors', function (Blueprint $table): void {
                $table->increments('id');
                $table->string('firstName', 32);
                $table->string('lastName', 32);
                $table->date('birthDate');
                $table->timestamps();
            });
        }
    }
}
