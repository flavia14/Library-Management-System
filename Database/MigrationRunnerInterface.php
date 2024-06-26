<?php

declare(strict_types=1);

interface MigrationRunnerInterface
{
    public function run(): void;
}
