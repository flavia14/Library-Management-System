<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Enum\BookEnum;
use Exception\MaxBooksLimitReachedException;

class LibraryMembership
{
    private int $id;
    private int $maximumBooksLimit = BookEnum::MAX_BOOKS_LIMIT;
    private int $maximumDaysLimit = BookEnum::MAX_DAYS_LIMIT;
    private string $membershipType;
    private DateTime $startDate;
    private DateTime $endDate;
    private BookLoanCollection $bookLoanCollection;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): LibraryMembership
    {
        $this->user = $user;

        return $this;
    }

    public function getMaximumBooksLimit(): int
    {
        return $this->maximumBooksLimit;
    }

    public function getMaximumDaysLimit(): int
    {
        return $this->maximumDaysLimit;
    }

    public function getMembershipType(): string
    {
        return $this->membershipType;
    }

    public function setMembershipType(string $membershipType): LibraryMembership
    {
        $this->membershipType = $membershipType;

        return $this;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(DateTime $startDate): LibraryMembership
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(DateTime $endDate): LibraryMembership
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getBookLoanCollection(): BookLoanCollection
    {
        return $this->bookLoanCollection;
    }

    public function addBookLoan(BookLoan $bookLoan): void
    {
        if (count($this->bookLoanCollection->getBookLoan()) >= $this->maximumBooksLimit) {
            throw new MaxBooksLimitReachedException();
        }

        $this->bookLoanCollection->setBookLoan($bookLoan);
    }
}