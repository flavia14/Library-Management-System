<?php

declare(strict_types=1);

namespace App\Entity;

class BookLoanCollection
{
    private int $id;
    private BookLoan $bookLoan;
    private LibraryMembership $libraryMembership;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getBookLoan(): BookLoan
    {
        return $this->bookLoan;
    }

    public function setBookLoan(BookLoan $bookLoan): void
    {
        $this->bookLoan = $bookLoan;
    }

    public function getLibraryMembership(): LibraryMembership
    {
        return $this->libraryMembership;
    }

    public function setLibraryMembership(LibraryMembership $libraryMembership): void
    {
        $this->libraryMembership = $libraryMembership;
    }
}
