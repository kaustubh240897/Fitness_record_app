<?php

namespace App\Http\Resources\m_Collection;

use Illuminate\Http\Resources\Json\JsonResource;

class m_CollectionCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[  
                 'id' => $this->id,
                 'collection_category'=> $this->collection_category,
                 'collection_title' => $this->collection_title,
                 
                 'href' =>
                 [
                     'link' => route('m_collections.show', $this->id)
                 ]
            ];
    }
}
