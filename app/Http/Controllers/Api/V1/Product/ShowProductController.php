<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Product $product)
    {
        return new ProductResource($product);
    }
}
