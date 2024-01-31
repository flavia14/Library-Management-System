<?php

declare(strict_types=1);

namespace App\Entity;

class BookItem
{
    protected int $id;

    private Book $book;

    private PublishingHouse $publishingHouse;

    private int $rackNumber;

    public function getId(): int
    {
        return $this->id;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBook(Book $book): BookItem
    {
        $this->book = $book;

        return $this;
    }

    public function getRackNumber(): int
    {
        return $this->rackNumber;
    }

    public function setRackNumber(int $rackNumber): BookItem
    {
        $this->rackNumber = $rackNumber;

        return $this;
    }

    public function getPublishingHouse(): PublishingHouse
    {
        return $this->publishingHouse;
    }

    public function setPublishingHouse(PublishingHouse $publishingHouse): BookItem
    {
        $this->publishingHouse = $publishingHouse;

        return $this;
    }

    public function addBookItem(BookItem $bookItem): void
    {
    }

    public function updateBookItem(BookItem $bookItem): void
    {
    }

    public function deleteBookItem(BookItem $bookItem): void
    {
    }

    public function getBookItemById(int $id): void
    {
    }

    public function getAllBookItems(): void
    {
    }
}
