<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class BookItem
 *
 * Represents an item of a book in the library.
 *
 * @package App\Entity
 */
class BookItem
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var Book
     */
    private Book $book;

    /**
     * @var PublishingHouse
     */
    private PublishingHouse $publishingHouse;

    /**
     * @var int
     */
    private int $rackNumber;

    /**
     * Get the ID of the book item.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the book associated with the book item.
     *
     * @return Book
     */
    public function getBook(): Book
    {
        return $this->book;
    }

    /**
     * Set the book associated with the book item.
     *
     * @param Book $book
     * @return BookItem
     */
    public function setBook(Book $book): BookItem
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get the rack number where the book item is located.
     *
     * @return int
     */
    public function getRackNumber(): int
    {
        return $this->rackNumber;
    }

    /**
     * Set the rack number where the book item is located.
     *
     * @param int $rackNumber
     * @return BookItem
     */
    public function setRackNumber(int $rackNumber): BookItem
    {
        $this->rackNumber = $rackNumber;

        return $this;
    }

    /**
     * Get the publishing house associated with the book item.
     *
     * @return PublishingHouse
     */
    public function getPublishingHouse(): PublishingHouse
    {
        return $this->publishingHouse;
    }

    /**
     * Set the publishing house associated with the book item.
     *
     * @param PublishingHouse $publishingHouse
     * @return BookItem
     */
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
