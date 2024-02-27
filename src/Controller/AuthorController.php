<?php

declare(strict_types=1);

namespace App\Controller;

use Bramus\Router\Router;
use App\Service\AuthorService;
use App\Helper\HttpResponseHelper;

class AuthorController
{
    public function __construct(private Router $router, private AuthorService $authorService)
    {
        $this->router->mount('/authors', function () {
            $this->router->get('/', function (): void {
                $this->getAllAuthorsRoute();
            });

            $this->router->get('/(\d+)', function (int $authorID): void {
                $this->getAuthorById($authorID);
            });

            $this->router->post('/', function (): void {
                $this->createAuthor();
            });

            $this->router->put('/(\d+)', function (int $authorID): void {
                $this->updateAuthorById($authorID);
            });

            $this->router->delete('/(\d+)', function (int $authorID): void {
                $this->deleteAuthorById($authorID);
            });
        });
    }

    private function createAuthor(): void
    {
        $firstName = $_POST['firstName'] ?? '';
        $lastName = $_POST['lastName'] ?? '';

        if ($firstName === '' || $lastName === '') {
            HttpResponseHelper::sendBadRequestResponse('Set firstName and lastName');
            return;
        }

        $author = $this->authorService->createAuthor($firstName, $lastName);

        echo $author->toJson(\JSON_PRETTY_PRINT);
    }

    private function updateAuthorById(int $authorID): void
    {
        $body = \file_get_contents('php://input');
        $data = \json_decode($body, true);

        if (empty($data['firstName']) || empty($data['lastName'])) {
            HttpResponseHelper::sendBadRequestResponse('Set firstName and lastName');
            return;
        }

        $updatedAuthor = $this->authorService->updateAuthorById($authorID, $data);

        if (!$updatedAuthor) {
            HttpResponseHelper::sendNotFoundResponse();
            return;
        }

        echo $updatedAuthor->toJson(\JSON_PRETTY_PRINT);
    }

    private function getAllAuthorsRoute(): void
    {
        $authors = $this->authorService->getAllAuthors();

        echo $authors->toJson(\JSON_PRETTY_PRINT);
    }

    private function getAuthorById(int $authorID): void
    {
        $author = $this->authorService->getAuthorById($authorID);

        if ($author->count() === 0) {
            HttpResponseHelper::sendNotFoundResponse();
            return;
        }

        echo $author->toJson(\JSON_PRETTY_PRINT);
    }

    private function deleteAuthorById(int $authorID): void
    {
        $this->authorService->deleteAuthorById($authorID);
    }
}
