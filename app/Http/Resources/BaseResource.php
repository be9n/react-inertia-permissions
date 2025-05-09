<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    protected static function newCollection($resource)
    {
        return new CustomResourceCollection($resource, static::class);
    }
}
