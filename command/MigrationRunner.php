<?php

include_once '../Database/migrations/TestTableMigration.php';
include_once '../Database/migrations/AuthorsTableMigration.php';

TestTableMigration::run();
AuthorsTableMigration::run();
