<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class t_LogResource extends JsonResource
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
            'access_datetime'=> $this->access_datetime,
        ];
    }
}
