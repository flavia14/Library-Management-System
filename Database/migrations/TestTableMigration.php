<?php

declare(strict_types=1);

namespace migrations;

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;
use MigrationRunnerInterface;

class TestTableMigration implements MigrationRunnerInterface
{
    public function run(): void
    {
        $schema = ConnectionManager::schema();

        if (!$schema->hasTable('test')) {
            $schema->create('test', function (Blueprint $table): void {
                $table->increments('id');
                $table->string('name', 32);
            });
        }
    }
}
