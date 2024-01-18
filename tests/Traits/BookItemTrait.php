<?php

namespace App\Tests\Traits;

use App\Entity\Book;
use App\Entity\BookItem;
use App\Entity\PublishingHouse;

trait BookItemTrait
{
    public function createBookItem(
        Book $book,
        PublishingHouse $publishingHouse,
        int $rackNumber = 1
    ): BookItem {
        $bookItem = new BookItem();

        $bookItem->setBook($book)
        ->setPublishingHouse($publishingHouse)
        ->setRackNumber($rackNumber);

        return $bookItem;
    }
}
