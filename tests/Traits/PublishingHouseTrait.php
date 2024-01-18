<?php

namespace App\Tests\Traits;

use App\Entity\Address;
use App\Entity\PublishingHouse;

trait PublishingHouseTrait
{
    public function createPublishingHouse(Address $address, string $name = "name"): PublishingHouse
    {
        $publishingHouse = new PublishingHouse();

        $publishingHouse->setName($name)
            ->setAddress($address);

        return $publishingHouse;
    }
}