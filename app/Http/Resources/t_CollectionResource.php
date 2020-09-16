<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class t_CollectionResource extends JsonResource
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

            'id' => $this->id,
            'm__users_id'=> $this->m__users_id,
            'm__collection_id'=> $this->m__collection_id,
            'new_display_flag'=> $this->new_display_flag,
           //'collection_category'=> $this->m_collections->id,

 
        ];
    }
}
