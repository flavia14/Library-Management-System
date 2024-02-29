<?php

use Illuminate\Database\Capsule\Manager as ConnectionManager;
use Illuminate\Database\Schema\Blueprint;

class UpdateGeorgeMigration
{
    public function run(): void
    {
        $schema = ConnectionManager::schema();

            $schema->update('authors', function (Blueprint $table): void {
                $table->increments('id');
                $table->string('firstName', 32);
                $table->string('lastName', 32);
                $table->date('birthDate');
                $table->timestamps();
            });
    }
}