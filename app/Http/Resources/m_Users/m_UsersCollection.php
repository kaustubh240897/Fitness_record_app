<?php

namespace App\Http\Resources\m_Users;

use Illuminate\Http\Resources\Json\JsonResource;

class m_UsersCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
                 'id' => $this->id,
                 'stride(in cm)'=> $this->stride,
                 'href' =>
                 [
                     'link' => route('m_users.show', $this->id)
                 ]

        ];
    }
}
