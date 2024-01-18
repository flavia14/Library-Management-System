<?php

namespace App\Tests\Traits;

use App\Entity\Author;
use DateTime;

trait AuthorTrait
{
    public function createAuthor(
        string $firstName = 'First Name',
        $lastName = "Last Name",
        $date = new DateTime('now')
    ): Author {
        $author = new Author();

        $author->setFirstName($firstName)
            -> setLastName($lastName)
            ->setBirthDate($date);

        return $author;
    }
}
