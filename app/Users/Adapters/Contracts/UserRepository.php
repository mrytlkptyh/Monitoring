<?php declare(strict_types=1);


use App\User;

interface UserRepository
{
    public function add(string $email, string $password): void;
}