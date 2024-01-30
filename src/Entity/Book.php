<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

class Book
{
    private int $id;

    private string $title;

    private Author $author;

    private SubjectCategory $subjectCategory;

    private DateTime $publicationDate;

    private int $totalCopies;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Book
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function setAuthor(Author $author): Book
    {
        $this->author = $author;

        return $this;
    }

    public function getSubjectCategory(): SubjectCategory
    {
        return $this->subjectCategory;
    }

    public function setSubjectCategory(SubjectCategory $subjectCategory): Book
    {
        $this->subjectCategory = $subjectCategory;

        return $this;
    }

    public function getPublicationDate(): DateTime
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(DateTime $publicationDate): Book
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    public function getTotalCopies(): int
    {
        return $this->totalCopies;
    }

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
