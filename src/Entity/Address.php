<?php

declare(strict_types=1);

namespace App\Entity;
class Address
{
    private int $id;
    private string $zipCode;
    private string $city;
    private string $number;
    private string $street;

    public function getId(): int
    {
        return $this->id;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): Address
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): Address
    {
        $this->number = $number;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): Address
    {
        $this->street = $street;

        return $this;
    }
}
