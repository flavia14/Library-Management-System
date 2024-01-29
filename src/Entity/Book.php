<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

/**
 * Class Book
 *
 * Represents a book entity in the application.
 *
 * @package App\Entity
 */
class Book
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var Author
     */
    private Author $author;

    /**
     * @var SubjectCategory
     */
    private SubjectCategory $subjectCategory;

    /**
     * @var DateTime
     */
    private DateTime $publicationDate;

    /**
     * @var int
     */
    private int $totalCopies;

    /**
     * Get the ID of the book.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the title of the book.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the title of the book.
     *
     * @param string $title
     * @return Book
     */
    public function setTitle(string $title): Book
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the author of the book.
     *
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * Set the author of the book.
     *
     * @param Author $author
     * @return Book
     */
    public function setAuthor(Author $author): Book
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the subject category of the book.
     *
     * @return SubjectCategory
     */
    public function getSubjectCategory(): SubjectCategory
    {
        return $this->subjectCategory;
    }

    /**
     * Set the subject category of the book.
     *
     * @param SubjectCategory $subjectCategory
     * @return Book
     */
    public function setSubjectCategory(SubjectCategory $subjectCategory): Book
    {
        $this->subjectCategory = $subjectCategory;

        return $this;
    }

    /**
     * Get the publication date of the book.
     *
     * @return DateTime
     */
    public function getPublicationDate(): DateTime
    {
        return $this->publicationDate;
    }

    /**
     * Set the publication date of the book.
     *
     * @param DateTime $publicationDate
     * @return Book
     */
    public function setPublicationDate(DateTime $publicationDate): Book
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get the total number of copies of the book.
     *
     * @return int
     */
    public function getTotalCopies(): int
    {
        return $this->totalCopies;
    }

    /**
     * Set the total number of copies of the book.
     *
     * @param int $totalCopies
     * @return Book
     */
    public function setTotalCopies(int $totalCopies): Book
    {
        $this->totalCopies = $totalCopies;

        return $this;
    }

    public function addBook(BookItem $bookItem): void
    {

    }
    public function updateBook(BookItem $bookItem): void
    {

    }
    public function deleteBook(BookItem $bookItem): void
    {

    }
    public function getBookById(int $id): void
    {

    }
    public function getAllBooks(): void
    {

    }
}
