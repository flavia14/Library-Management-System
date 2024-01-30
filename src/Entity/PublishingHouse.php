<?php

declare(strict_types=1);

namespace App\Entity;

class PublishingHouse
{
    private int $id;

    private string $name;

    private Address $address;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): PublishingHouse
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): PublishingHouse
    {
        $this->address = $address;

        return $this;
    }
}
