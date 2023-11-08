<?php declare(strict_types=1);

namespace App\Users\Adapters\Contracts;

use App\User;

class UserRepository
{
    public function add(string $email, string $password): void
    {
        User::fristOrCreate([
            'email' => $email,
            'password' => $password
        ]);
    }
}
