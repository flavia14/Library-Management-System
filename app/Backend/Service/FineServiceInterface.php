<?php

interface FineServiceInterface
{
    public function addFine(User $user);
    public function payFine(User $user);
}
