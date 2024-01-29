<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

/**
 * Class Author
 *
 * Represents an author entity in the application.
 *
 * @package App\Entity
 */
class Author
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var string
     */
    private string $lastName;

    /**
     * @var DateTime
     */
    private DateTime $birthDate;

    /**
     * Get the ID of the author.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the first name of the author.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Set the first name of the author.
     *
     * @param string $firstName
     * @return Author
     */
    public function setFirstName(string $firstName): Author
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the last name of the author.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Set the last name of the author.
     *
     * @param string $lastName
     * @return Author
     */
    public function setLastName(string $lastName): Author
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the birth date of the author.
     *
     * @return DateTime
     */
    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    /**
     * Set the birth date of the author.
     *
     * @param DateTime $birthDate
     * @return Author
     */
    public function setBirthDate(DateTime $birthDate): Author
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the full name of the author.
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
