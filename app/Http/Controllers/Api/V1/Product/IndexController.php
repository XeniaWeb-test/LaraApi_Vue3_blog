<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): AnonymousResourceCollection
    {
        $products = Product::query()->with('category')->get();

        return ProductResource::collection($products);
    }
}
