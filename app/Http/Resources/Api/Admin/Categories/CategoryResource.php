<?php

namespace App\Http\Resources\Api\Admin\Categories;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'parent_category_name' => $this->parent?->name,
            'products_count' => $this->products_count,
        ];
    }
}
