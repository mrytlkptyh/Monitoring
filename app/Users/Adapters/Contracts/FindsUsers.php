<?php declare(strict_types=1);

namespace App\Users\Adapters\Contracts;

use App\User;

interface FindsUsers
{
    public function findAll(): array;
    public function findByind(int $id): User;
}