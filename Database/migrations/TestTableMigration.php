<?php

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;

class TestTableMigration
{
    public static function run(): void
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
