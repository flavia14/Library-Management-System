<?php

namespace App\Tests\Traits;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\SubjectCategory;
use DateTime;

trait BookTrait
{
    public function createBook(
        Author $author,
        SubjectCategory $subjectCategory,
        string $title = "title",
        int $total = 10,
        DateTime $date = new DateTime('now')
    ): Book {
        $book = new Book();
        $book->setAuthor($author)
            ->setTitle($title)
            ->setPublicationDate($date)
            ->setSubjectCategory($subjectCategory)
            ->setTotalCopies($total);

        return $book;
    }
}
