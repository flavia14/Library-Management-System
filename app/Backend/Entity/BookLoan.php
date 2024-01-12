<?php

declare(strict_types=1);

class BookLoan implements \Countable
{
    private int $id;
    private User $user;
    private Book $book;
    private DateTime $checkoutDate;
    private DateTime $dueDate;
    private bool $isReturned;
    private int $lateFee;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): BookLoan
    {
        $this->user = $user;

        return $this;
    }

    public function getBook(): Book
    {
        return $this->book;
    }

    public function setBookCopy(Book $book): BookLoan
    {
        $this->book = $book;

        return $this;
    }

    public function getCheckoutDate(): DateTime
    {
        return $this->checkoutDate;
    }

    public function setCheckoutDate(DateTime $checkoutDate): BookLoan
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    public function getDueDate(): DateTime
    {
        return $this->dueDate;
    }

    public function setDueDate(DateTime $dueDate): BookLoan
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    public function isReturned(): bool
    {
        return $this->isReturned;
    }

    public function setReturned(bool $isReturned): void
    {
        $this->isReturned = $isReturned;
    }

    public function getLateFee(): int
    {
        return $this->lateFee;
    }

    public function setLateFee(int $lateFee): BookLoan
    {
        $this->lateFee = $lateFee;

        return $this;
    }

    #[\Override] public function count(): int
    {
        return 1;
    }
}
