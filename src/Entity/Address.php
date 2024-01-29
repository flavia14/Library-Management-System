<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class Address
 *
 * Represents an address entity in the application.
 *
 * @package App\Entity
 */
class Address
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $zipCode;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $number;

    /**
     * @var string
     */
    private string $street;

    /**
     * Get the ID of the address.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the zip code of the address.
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * Set the zip code of the address.
     *
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode(string $zipCode): Address
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get the city of the address.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the city of the address.
     *
     * @param string $city
     * @return Address
     */
    public function setCity(string $city): Address
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the number of the address.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set the number of the address.
     *
     * @param string $number
     * @return Address
     */
    public function setNumber(string $number): Address
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the street of the address.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the street of the address.
     *
     * @param string $street
     * @return Address
     */
    public function setStreet(string $street): Address
    {
        $this->street = $street;

        return $this;
    }
}
