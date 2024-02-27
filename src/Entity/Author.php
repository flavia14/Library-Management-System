<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    public $timestamps = false;

    protected int $id;

    /** @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    protected $fillable = ['firstName', 'lastName', 'birthDate'];

    /** @phpcsSuppress SlevomatCodingStandard.TypeHints.PropertyTypeHint.MissingAnyTypeHint */
    protected $table = 'authors';
    private string $firstName;

    private string $lastName;

    private DateTime $birthDate;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): Author
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): Author
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthDate(): DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(DateTime $birthDate): Author
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getFullName(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}
