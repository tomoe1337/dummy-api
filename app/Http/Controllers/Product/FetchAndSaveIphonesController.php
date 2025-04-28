<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\JsonResponse;

class FetchAndSaveIphonesController extends Controller
{
    protected ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function __invoke(): JsonResponse
    {
        $this->productService->fetchAndSaveIphones();
        return response()->json(['message' => 'iPhones fetched and saved successfully']);
    }
}
