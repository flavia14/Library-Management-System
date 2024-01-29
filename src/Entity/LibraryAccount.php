<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class LibraryAccount
 *
 * Represents a library account associated with a user and a library membership.
 *
 * @package App\Entity
 */
class LibraryAccount
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
     * @var LibraryMembership
     */
    private LibraryMembership $libraryMembership;

    /**
     * Get the ID of the library account.
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
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * Get the associated library membership.
     *
     * @return LibraryMembership
     */
    public function getMembership(): LibraryMembership
    {
        return $this->libraryMembership;
    }

    /**
     * Set the associated library membership.
     *
     * @param LibraryMembership $libraryMembership
     */
    public function setMembership(LibraryMembership $libraryMembership): void
    {
        $this->libraryMembership = $libraryMembership;
    }
}
