<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class PublishingHouse
 *
 * Represents a publishing house entity.
 *
 * @package App\Entity
 */
class PublishingHouse
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
     * @var Address
     */
    private Address $address;

    /**
     * Get the ID of the publishing house.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the name of the publishing house.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name of the publishing house.
     *
     * @param string $name
     * @return PublishingHouse
     */
    public function setName(string $name): PublishingHouse
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the address of the publishing house.
     *
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * Set the address of the publishing house.
     *
     * @param Address $address
     * @return PublishingHouse
     */
    public function setAddress(Address $address): PublishingHouse
    {
        $this->address = $address;

        return $this;
    }
}
