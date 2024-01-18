<?php

declare(strict_types=1);

interface LoanServiceInterface
{
    public function checkoutBook(User $user, BookItem $bookItem);
    public function removeReservation(User $user, BookItem $bookItem);
    public function reserveBook(User $user, BookItem $bookItem);
    public function checkAvailability(BookItem $bookItem);
    public function returnBook(User $user, BookItem $bookItem);
}
