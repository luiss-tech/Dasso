<?php

namespace App\Models;

class Product extends BaseModel
{
    public function list(): array
    {
        return [];
    }

    public function find(int $id): ?array
    {
        return null;
    }

    public function create(array $data): bool
    {
        return false;
    }

    public function update(int $id, array $data): bool
    {
        return false;
    }

    public function delete(int $id): bool
    {
        return false;
    }
}
