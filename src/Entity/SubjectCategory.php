<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class SubjectCategory
 *
 * Represents a subject category entity.
 *
 * @package App\Entity
 */
class SubjectCategory
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $description;

    /**
     * Get the ID of the subject category.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the name of the subject category.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name of the subject category.
     *
     * @param string $name
     * @return SubjectCategory
     */
    public function setName(string $name): SubjectCategory
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the description of the subject category.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the description of the subject category.
     *
     * @param string $description
     * @return SubjectCategory
     */
    public function setDescription(string $description): SubjectCategory
    {
        $this->description = $description;

        return $this;
    }
}
