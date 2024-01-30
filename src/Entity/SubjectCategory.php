<?php

declare(strict_types=1);

namespace App\Entity;

class SubjectCategory
{
    private int $id;

    private string $name;

    private string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): SubjectCategory
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): SubjectCategory
    {
        $this->description = $description;

        return $this;
    }
}
