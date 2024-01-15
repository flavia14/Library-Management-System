<?php

declare(strict_types=1);

interface BookItemInterface
{
    public function addBookItem(BookItem $bookItem);
    public function updateBookItem(BookItem $bookItem);
    public function deleteBookItem(BookItem $bookItem);
    public function getBookItemById(int $id): ?BookItem;
    public function getAllBookItems(): array;
}
