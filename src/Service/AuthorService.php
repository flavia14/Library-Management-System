<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Author;
use App\Exception\AuthorCreationException;
use App\Exception\AuthorDeletionException;
use App\Exception\AuthorNotFoundException;
use App\Exception\AuthorUpdateException;
use Illuminate\Support\Collection;

class AuthorService
{
    public function getAllAuthors(): Collection
    {
        try {
            return Author::all();
        } catch (\Exception $e) {
            throw new AuthorNotFoundException('Error fetching authors.');
        }
    }

    public function getAuthorById(int $authorID): ?Collection
    {
        try {
            $author = Author::query()->where('id', '=', $authorID)->get();
            if ($author->isEmpty()) {
                throw new AuthorNotFoundException('Author not found with ID ' . $authorID);
            }

            return $author;
        } catch (\Exception $e) {
            throw new AuthorNotFoundException('Error fetching author.');
        }
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
            throw new AuthorCreationException('Error creating author.');
        }

        return $author;
    }

    public function updateAuthorById(int $authorID, array $data): ?Author
    {
        $author = Author::query()->find($authorID);

        try {
            $author->update([
                'firstName' => $data['firstName'],
                'lastName' => $data['lastName'],
                'birthDate' => new \DateTime('now'),
            ]);

            return $author;
        } catch (\Exception $e) {
            throw new AuthorUpdateException('Error updating author.');
        }
    }


    public function deleteAuthorById(int $authorID): void
    {
        $author = Author::query()->find($authorID);

        if ($author) {
            try {
                $author->delete();
            } catch (\Exception $e) {
                throw new AuthorDeletionException('Error deleting author.');
            }
        }
    }
}
