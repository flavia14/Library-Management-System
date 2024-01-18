<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\BookItem;

class BookItemService
{
    public function addBookItem(BookItem $bookItem): array
    {
        return ['success' => true];
    }
    public function updateBookItem(BookItem $bookItem): array
    {
        $bookItem->setRackNumber(1233343);

        return ['success' => true];
    }
    public function deleteBookItem(BookItem $bookItem)
    {

    }
    public function getBookItemById(int $id)
    {

    }
    public function getAllBookItems()
    {

    }
}
