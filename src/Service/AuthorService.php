<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Author;
use Illuminate\Support\Collection;

class AuthorService
{
    public function getAllAuthors(): Collection
    {
        return Author::all();
    }

    /**
     * @param int $authorID
     * @return Collection
     */
    public function getAuthorById(int $authorID): Collection
    {
        return Author::query()->where('id', '=', $authorID)->getQuery()->get();
    }

    public function createAuthor(string $firstName, string $lastName): Author
    {
        $author = new Author();
        $author->setFirstName($firstName);
        $author->setLastName($lastName);
        $author->setBirthDate(new \DateTime('now'));

        $author->fill([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'birthDate' => new \DateTime('now')
        ]);
        try {
            $author->save();
        } catch (\Exception $e) {
            throw $e;
        }

        return $author;
    }


    public function updateAuthorById(int $authorID, array $data): ?Author
    {
        $author = Author::query()->find($authorID);

        if (!$author) {
            return null;
        }

        try {
            $author->update([
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'birthDate' => new \DateTime('now'),
            ]);
            return $author;

        } catch (\Exception $e) {
            return null;
        }
    }



    public function deleteAuthorById(int $authorID): void
    {
        $author = Author::query()->find($authorID);

        if ($author) {
            $author->delete();
        }
    }
}
