<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class ItemSimpleResource extends JsonResource
{
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'created_at' => nice_date($this->created_at),
        ];
    }
}
