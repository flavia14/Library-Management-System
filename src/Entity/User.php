<?php

declare(strict_types=1);

namespace App\Entity;

/**
 * Class User
 *
 * Represents a user entity in the application.
 *
 * @package App\Entity
 */
class User
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $role;

    /**
     * @var string
     */
    private string $username;

    /**
     * @var Email
     */
    private Email $email;

    /**
     * @var string
     */
    private string $password;

    /**
     * Get the ID of the user.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the role of the user.
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Set the role of the user.
     *
     * @param string $role
     * @return User
     */
    public function setRole(string $role): User
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the username of the user.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set the username of the user.
     *
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the email of the user.
     *
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * Set the email of the user.
     *
     * @param Email $email
     * @return User
     */
    public function setEmail(Email $email): User
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the password of the user.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the password of the user.
     *
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;

        return $this;
    }
}
