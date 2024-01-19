<?php

namespace App\Tests\Traits;

use App\Entity\Address;

trait AddressTrait
{
    public function createAddress(
        string $number = '112',
        string $street = 'Street',
        string $zipCode = "12134",
        string $city = "City"
    ): Address {
      $address = new Address();

      $address->setNumber($number)
          ->setStreet($street)
          ->setZipCode($zipCode)
          ->setCity($city);

      return $address;
    }
}
