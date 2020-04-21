<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DefinitionResource extends JsonResource
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
            'value' => $this->definition,
            'synonyms' => SynonymResource::collection($this->synonyms),
            'antonyms' => AntonymResource::collection($this->antonyms),
        ];
    }
}
