<?php

declare(strict_types=1);

use Exception\InvalidEmailException;

class Email
{
    private int $id;
    private string $address;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        if (!filter_var($address, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidEmailException();
        }

        $this->address = $address;
    }
}
