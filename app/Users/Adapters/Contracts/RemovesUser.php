<?php declare(strict_types=1);

namespace App\Users\Adapters\Contracts;

interface RemovesUser
{
    public function remove(int $id): void; 
}