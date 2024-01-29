<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

/**
 * Class BookLoan
 *
 * @package App\Entity
 */
class BookLoan implements \Countable
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var User
     */
    private User $user;

    /**
     * @var Book
     */
    private Book $book;

    /**
     * @var DateTime
     */
    private DateTime $checkoutDate;

    /**
     * @var DateTime
     */
    private DateTime $dueDate;

    /**
     * @var bool
     */
    private bool $isReturned;

    /**
     * @var int
     */
    private int $lateFee;

    /**
     * Get the ID of the book loan.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the user associated with the book loan.
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the user associated with the book loan.
     *
     * @param User $user
     * @return BookLoan
     */
    public function setUser(User $user): BookLoan
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the book associated with the book loan.
     *
     * @return Book
     */
    public function getBook(): Book
    {
        return $this->book;
    }

    /**
     * Set the book associated with the book loan.
     *
     * @param Book $book
     * @return BookLoan
     */
    public function setBook(Book $book): BookLoan
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get the checkout date of the book loan.
     *
     * @return DateTime
     */
    public function getCheckoutDate(): DateTime
    {
        return $this->checkoutDate;
    }

    /**
     * Set the checkout date of the book loan.
     *
     * @param DateTime $checkoutDate
     * @return BookLoan
     */
    public function setCheckoutDate(DateTime $checkoutDate): BookLoan
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    /**
     * Get the due date of the book loan.
     *
     * @return DateTime
     */
    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    /**
     * Set the due date of the book loan.
     *
     * @param DateTime $dueDate
     * @return BookLoan
     */
    public function setDueDate(DateTime $dueDate): BookLoan
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Check if the book is returned.
     *
     * @return bool
     */
    public function isReturned(): bool
    {
        return $this->isReturned;
    }

    /**
     * Set whether the book is returned.
     *
     * @param bool $isReturned
     */
    public function setReturned(bool $isReturned): void
    {
        $this->isReturned = $isReturned;
    }

    /**
     * Get the late fee associated with the book loan.
     *
     * @return int
     */
    public function getLateFee(): int
    {
        return $this->lateFee;
    }

    /**
     * Set the late fee associated with the book loan.
     *
     * @param int $lateFee
     * @return BookLoan
     */
    public function setLateFee(int $lateFee): BookLoan
    {
        $this->lateFee = $lateFee;

        return $this;
    }

    /**
     * Count the book loan.
     *
     * @return int
     */
    #[\Override]
    public function count(): int
    {
        return 1;
    }

    public function checkoutBook(User $user, BookItem $bookItem): void
    {

    }

    public function removeReservation(User $user, BookItem $bookItem): void
    {

    }

    public function reserveBook(User $user, BookItem $bookItem): void
    {

    }

    public function checkAvailability(BookItem $bookItem): void
    {

    }

    public function returnBook(User $user, BookItem $bookItem): void
    {

    }
}
