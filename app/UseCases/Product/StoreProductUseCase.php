<?php

declare(strict_types=1);

namespace App\UseCases\Product;

use App\Models\Product;
use App\UseCases\Product\Dto\StoreProductDto;

class StoreProductUseCase
{
    public function handle(StoreProductDto $storeProductDto): Product
    {
        $product = new Product();

        $product->title = $storeProductDto->getTitle();
        $product->price = $storeProductDto->getPrice();
        $product->category_id = $storeProductDto->getCategoryId();

        if (!is_null($storeProductDto->getDescription())) {
            $product->description = $storeProductDto->getDescription();
        }

        if (!is_null($storeProductDto->getImage())) {
            $product->image = $storeProductDto->getImage();
        }

        $product->save();

        return $product;
    }
}
