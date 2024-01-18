<?php

interface UserServiceInterface
{
    public function login(string $username, string $password);
    public function logout();
    public function viewAccount(User $user);
    public function editAccount(User $user);
    public function register();
}
