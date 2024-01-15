<?php

declare(strict_types=1);

class BookItem
{
   private int $id;
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
}
