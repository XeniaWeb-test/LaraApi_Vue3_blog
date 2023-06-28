<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Resources\ProductResource;
use App\UseCases\Product\Dto\StoreProductDto;
use App\UseCases\Product\StoreProductUseCase;

class StoreProductController extends Controller
{
    public function __construct(
        private readonly StoreProductUseCase $storeProductUseCase
    ) {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreProductRequest $request): ProductResource
    {
        $createFileDto = new StoreProductDto();
        $createFileDto->setTitle($request->get('title'));
        $createFileDto->setPrice($request->get('price'));
        $createFileDto->setCategoryId($request->get('categoryId'));

        if (!empty($request->get('description'))) {
            $createFileDto->setDescription($request->get('description'));
        }

        $image = $request->file('image');
        if (!empty($image) && $image->isValid()) {
            $path = $image->store('/products', 'photos');

            $createFileDto->setImage($path);
        }

        $product = $this->storeProductUseCase->handle($createFileDto);
        $product->load('category');

        return new ProductResource($product);
    }
}
