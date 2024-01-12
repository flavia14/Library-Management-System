<?php

declare(strict_types=1);

class LibraryAccount
{
    private int $id;
    private User $user;
    private LibraryMembership $membership;

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
        return $this->membership;
    }

    public function setMembership(LibraryMembership $membership): void
    {
        $this->membership = $membership;
    }
}
