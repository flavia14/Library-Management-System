<?php

declare(strict_types=1);

namespace App\Entity;

class LibraryAccount
{
    private int $id;
    private User $user;
    private LibraryMembership $libraryMembership;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getMembership(): LibraryMembership
    {
        return $this->libraryMembership;
    }

    public function setMembership(LibraryMembership $libraryMembership): void
    {
        $this->libraryMembership = $libraryMembership;
    }
}
