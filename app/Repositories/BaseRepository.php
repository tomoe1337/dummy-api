<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class BaseRepository implements RepositoryInterface
{
    protected string $baseUrl = 'https://dummyjson.com';

    public function fetchAllFromApi(string $endpoint): array
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->get("{$this->baseUrl}/{$endpoint}");
        return $response->json()['products'] ?? [];
    }

    public function saveToDatabase(array $data): void
    {
        foreach ($data as $item) {
            \App\Models\Product::updateOrCreate(
                ['title' => $item['title']],
                $item
            );
        }
    }

    public function getAllFromDatabase(): array
    {
        return \App\Models\Product::all()->toArray();
    }

    public function addProductToApi(array $data): array
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->post("{$this->baseUrl}/products/add", $data);

        return $response->json();
    }
}
