<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class BookLoanCollection
 *
 * @package App\Entity
 */
class BookLoanCollection
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var BookLoan
     */
    private BookLoan $bookLoan;

    /**
     * @var LibraryMembership
     */
    private LibraryMembership $libraryMembership;

    /**
     * Get the ID of the book loan collection.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the ID of the book loan collection.
     *
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Get the book loan associated with the collection.
     *
     * @return BookLoan
     */
    public function getBookLoan(): BookLoan
    {
        return $this->bookLoan;
    }

    /**
     * Set the book loan associated with the collection.
     *
     * @param BookLoan $bookLoan
     */
    public function setBookLoan(BookLoan $bookLoan): void
    {
        $this->bookLoan = $bookLoan;
    }

    /**
     * Get the library membership associated with the collection.
     *
     * @return LibraryMembership
     */
    public function getLibraryMembership(): LibraryMembership
    {
        return $this->libraryMembership;
    }

    /**
     * Set the library membership associated with the collection.
     *
     * @param LibraryMembership $libraryMembership
     */
    public function setLibraryMembership(LibraryMembership $libraryMembership): void
    {
        $this->libraryMembership = $libraryMembership;
    }
}
