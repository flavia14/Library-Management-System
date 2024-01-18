<?php

declare(strict_types=1);

interface BookServiceInterface
{
    public function addBook(Book $book);
    public function updateBook(Book $book);
    public function deleteBook(Book $book);
    public function getBookById(int $id): ?Book;
    public function getAllBooks(): array;
}
