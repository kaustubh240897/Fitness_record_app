<?php

namespace App\Http\Resources\m_Collection;

use Illuminate\Http\Resources\Json\JsonResource;

class m_CollectionResource extends JsonResource
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
                 'collection_category'=> $this->collection_category,
                 'collection_title' => $this->collection_title,
                 'filename'=> $this->filename,
                 'path' => $this->path,
                 'href' =>
                 [
                     'link' => route('collections.index', $this->id)
                 ]

        ];
    }
}
