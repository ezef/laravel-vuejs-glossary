<?php

namespace App\Http\Resources;

use App\Http\Resources\LanguageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class GlossaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'language'    => new LanguageResource($this->resource->language),
            'created_ago' => $this->updated_at->diffForHumans(),
        ];
    }
}
