<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostingFullResource extends JsonResource
{
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'created_at' => nice_date($this->created_at),
            'updated_at' => nice_date($this->updated_at),
            'user' => $this->whenLoaded('user', new UserResource($this->user)),
        ];
    }
}
