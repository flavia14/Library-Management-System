<?php

declare(strict_types=1);

use App\Entity\MigrationHistory;

class MigrationCollection implements IteratorAggregate
{
    private array $migrations = [];

    public function addMigration(MigrationRunnerInterface $migration): void
    {
        $this->migrations[] = $migration;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->migrations);
    }

    public function runMigrations(): void
    {
        foreach ($this->migrations as $migration) {
            $migrationName = get_class($migration);

            if (!$this->isMigrationExecuted($migrationName)) {
                $migration->run();

                $this->recordMigrationHistory($migrationName);
            }
        }
    }

    public static function addMigrationsFromDirectory(string $directory): self
    {
        $collection = new self();

        foreach (scandir($directory) as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $className = pathinfo($file, PATHINFO_FILENAME);
                $namespace = 'migrations';
                $class = $namespace . '\\' . $className;

                $file_path = $directory . '/' . $file;
                if (file_exists($file_path)) {
                    include_once $file_path;

                    if (class_exists($class)) {
                        $migration = new $class();
                        $collection->addMigration($migration);
                    } else {
                        echo "Class $class not found after including $file_path";
                    }
                } else {
                    echo "File $file_path not found";
                }
            }
        }

        return $collection;
    }

    private function isMigrationExecuted(string $migrationName): bool
    {
        return MigrationHistory::where('migration_name', $migrationName)->exists();
    }

    private function recordMigrationHistory(string $migrationName): void
    {
        MigrationHistory::create(['migration_name' => $migrationName, 'date' => new DateTime('now')]);
    }
}
