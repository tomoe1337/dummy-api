<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function fetchAllFromApi(string $endpoint): array;
    public function saveToDatabase(array $data): void;
    public function getAllFromDatabase(): array;
    public function addProductToApi(array $data): array;
}
