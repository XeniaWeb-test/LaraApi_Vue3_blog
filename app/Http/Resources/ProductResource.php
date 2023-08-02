<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'image' => $this->image ? Storage::disk('photos')->url($this->image) : Storage::disk('photos')->url('no-image.png'),
            'categoryId' => $this->category_id,
            'categoryTitle' => $this->category->title,
            'createdAt' => $this->created_at->toDateString(),
        ];
    }
}
