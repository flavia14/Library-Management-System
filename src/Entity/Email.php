<?php

declare(strict_types=1);

namespace App\Entity;

use App\Exception\InvalidEmailException;

/**
 * Class Email
 *
 * Represents an email address.
 *
 * @package App\Entity
 */
class Email
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $address;

    /**
     * Get the ID of the email.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the email address.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set the email address after validating it.
     *
     * @param string $address
     *
     * @throws InvalidEmailException If the email address is invalid.
     */
    public function setAddress(string $address): void
    {
        if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException();
        }

        $this->address = $address;
    }
}
