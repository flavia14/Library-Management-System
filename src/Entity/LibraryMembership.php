<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\BookEnum;
use App\Exception\MaxBooksLimitReachedException;
use DateTime;

/**
 * Class LibraryMembership
 *
 * Represents a library membership associated with a user.
 *
 * @package App\Entity
 */
class LibraryMembership
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var int
     */
    private int $maximumBooksLimit = BookEnum::MAX_BOOKS_LIMIT;

    /**
     * @var int
     */
    private int $maximumDaysLimit = BookEnum::MAX_DAYS_LIMIT;

    /**
     * @var string
     */
    private string $membershipType;

    /**
     * @var DateTime
     */
    private DateTime $startDate;

    /**
     * @var DateTime
     */
    private DateTime $endDate;

    /**
     * @var BookLoanCollection
     */
    private BookLoanCollection $bookLoanCollection;

    /**
     * Get the ID of the library membership.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the associated user.
     *
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Set the associated user.
     *
     * @param User $user
     * @return LibraryMembership
     */
    public function setUser(User $user): LibraryMembership
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the maximum books limit for the membership.
     *
     * @return int
     */
    public function getMaximumBooksLimit(): int
    {
        return $this->maximumBooksLimit;
    }

    /**
     * Get the maximum days limit for the membership.
     *
     * @return int
     */
    public function getMaximumDaysLimit(): int
    {
        return $this->maximumDaysLimit;
    }

    /**
     * Get the type of membership.
     *
     * @return string
     */
    public function getMembershipType(): string
    {
        return $this->membershipType;
    }

    /**
     * Set the type of membership.
     *
     * @param string $membershipType
     * @return LibraryMembership
     */
    public function setMembershipType(string $membershipType): LibraryMembership
    {
        $this->membershipType = $membershipType;

        return $this;
    }

    /**
     * Get the start date of the membership.
     *
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * Set the start date of the membership.
     *
     * @param DateTime $startDate
     * @return LibraryMembership
     */
    public function setStartDate(DateTime $startDate): LibraryMembership
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the end date of the membership.
     *
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * Set the end date of the membership.
     *
     * @param DateTime $endDate
     * @return LibraryMembership
     */
    public function setEndDate(DateTime $endDate): LibraryMembership
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the book loan collection associated with the membership.
     *
     * @return BookLoanCollection
     */
    public function getBookLoanCollection(): BookLoanCollection
    {
        return $this->bookLoanCollection;
    }

    /**
     * Add a book loan to the membership.
     *
     * @param BookLoan $bookLoan
     * @throws MaxBooksLimitReachedException
     */
    public function addBookLoan(BookLoan $bookLoan): void
    {
        if (count($this->bookLoanCollection->getBookLoan()) >= $this->maximumBooksLimit) {
            throw new MaxBooksLimitReachedException();
        }

        $this->bookLoanCollection->setBookLoan($bookLoan);
    }
}
