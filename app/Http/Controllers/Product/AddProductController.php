<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;

class AddProductController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function __invoke(AddProductRequest $request): JsonResponse
    {
        $validatedData = $request->validated();

        $this->productService->addProduct($validatedData);

        return response()->json(['message' => 'Product added and saved successfully']);
    }
}
