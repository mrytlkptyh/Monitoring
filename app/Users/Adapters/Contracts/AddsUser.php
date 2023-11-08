<?php declare(strict_types=1);

namespace App\Users\Adapters\Contracts;


interface AddsUser
{
    public function add(string $email, string $password): void;
}