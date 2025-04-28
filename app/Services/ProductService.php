<?php

namespace App\Services;

use App\Repositories\BaseRepository;

class ProductService
{
    protected BaseRepository $repository;

    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function fetchAndSaveIphones(): void
    {
        $products = $this->repository->fetchAllFromApi('products/search?q=iPhone');
        $this->repository->saveToDatabase($products);
    }

    public function getAllIphones(): array
    {
        return $this->repository->getAllFromDatabase();
    }

    public function addProduct(array $data): void
    {
        $newProduct = $this->repository->addProductToApi($data);

        \App\Models\Product::create([
            'title' => $newProduct['title'],
            'description' => $newProduct['description'] ?? null,
            'price' => $newProduct['price'],
            'stock' => $newProduct['stock'] ?? null,
            'brand' => $newProduct['brand'] ?? null,
            'category' => $newProduct['category'] ?? null,
        ]);
    }
}
