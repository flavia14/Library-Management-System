<?php

declare(strict_types=1);

include_once __DIR__ . '/MigrationCollection.php';
include_once __DIR__ . '/MigrationRunnerInterface.php';

$migrationCollection = MigrationCollection::addMigrationsFromDirectory(__DIR__ . '/migrations');

$migrationCollection->runMigrations();
