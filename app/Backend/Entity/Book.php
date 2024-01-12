<?php

declare(strict_types=1);

class Book
{
    private int $id;
    private string $title;
    private Author $author;
    private SubjectCategory $subjectCategory;
    private string $publicationDate;

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

    public function getPublicationDate(): string
    {
        return $this->publicationDate;
    }

    public function setPublicationDate(string $publicationDate): Book
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }
}
